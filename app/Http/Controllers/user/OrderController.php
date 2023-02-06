<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\user\CheckoutController;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use App\Models\Address;
use App\Models\Checkout;
use App\Models\City;
use App\Models\Product;
use App\Models\Seller;
use App\Models\State;
use App\Models\Variant;
use Illuminate\Support\Facades\Http;
use PDF;
use Illuminate\Support\Facades\Session;

class OrderController extends Controller
{

    protected $delhiveryUrlTest, $delhiveryKeyTest, $delhiveryHeader, $delhiveryUrlLive, $delhiveryKeyLive, $delhiveryHeaderLive, $delhiveryHeaderTest, $ss, $md, $delhiveryHeaderTestCreateOrder;


    public function __construct()
    {
        $this->delhiveryUrlTest  = env('DELHIVERY_URL_TEST');
        $this->delhiveryKeyTest  = env('DELHIVERY_KEY_TEST');
        $this->delhiveryUrlLive  = env('DELHIVERY_URL_LIVE');
        $this->delhiveryKeyLive = env('DELHIVERY_KEY_LIVE');
        $this->md = 'S';
        $this->ss = 'Delivered';
        $this->delhiveryHeaderTest = [
            'Authorization' => "Token $this->delhiveryKeyTest",
            'accept' => "application/json",
            'Content-Type' => "application/json"
        ];

        $this->delhiveryHeaderLive = [
            'Authorization' => "Token $this->delhiveryKeyLive",
            'accept' => "application/json",
            'Content-Type' => "application/json"
        ];
        $this->delhiveryHeaderTestCreateOrder = [
            'Authorization: Token ' . $this->delhiveryKeyTest,
            'Content-Type: application/json',
            'Accept: application/json',
        ];
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function orderPage()
    {

        $user = Auth::guard('user')->user();

        if (Session::has('pincode') && $user) {
            $pincode = Session::get('pincode');
            if (Session::has('line_items')) {
                $line_items = Session::get('line_items');
                $states = State::all();
                $cities = City::all();
                $address = Address::where(['status' => '1', 'user_id' => $user->id])->first();

                return view('user.order.form', compact('line_items', 'pincode', 'states', 'cities', 'user', 'address'));
            }
        }
        return redirect()->back();
    }

    public function index()
    {

        $pdf = PDF::loadView('user.invoice1');

        return $pdf->stream();
        // return $pdf->download('invoice.pdf');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function addressSave(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'address1' => 'required',
            'city_id' => 'required',
            'state_id' => 'required',
            'pin_code' => 'required',
            'phone_no' => 'required',
        ]);

        $user = Auth::guard('user')->user();
        User::find($user->id)->address()->update(['status' => '0']);
        $resDB =  User::find($user->id)->address()->create($request->all());
        if ($resDB) {
            if (Session::has('line_items')) {

                $line_items = Session::get('line_items');
                $orderDb = User::find($user->id)->order()->create(['email' => 's111@gmail.com', 'total' => $line_items->sum('sale_price'), 'address_id', $resDB->id]);
                return response()->json(['success' => 'your data save successfully']);
            }
        }
        return response()->json(['error' => '']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function useGst()
    {
        $gstData = [
            'gst_name' => 'dsfad',
            'gst_no' => '3446385',
        ];

        dd(User::find(Auth::user()->id)->update($gstData));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function orderEmailConfirmation(Request $request)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function orderCreate(Request $request)
    {

        $userAuth = Auth::guard('user')->user();

        $user = User::with('address')->find($userAuth->id);

        if (Session::has('line_items')) {
            $line_items = Session::get('line_items');
            $address = Address::where(['status' => '1', 'user_id' => $user->id])->first();

            $orderCreate = [
                'address_id' => $address->id,
                'email' => 'a@gmail.com',
                'total' => $line_items->sum('selling_price'),
                'total_gst' => 0.0,
                'payment_mode' => '0',
                'shipping_mode' => '0'
            ];

            $order = $user->order()->create($orderCreate);

            $lineItemDB =  $order->lineItems()->createMany($line_items->toArray());
            //dump($lineItemDB);

            // foreach ($lineItemDB as $line_item) {
            //     $this->orderCretionManagement($line_item, $order, $user, $lineItemDB, $address);
            // }
            info($lineItemDB);

            $request->session()->forget('line_items');
        }
        $order = Order::where(['status' => '0', 'user_id' => $user->id])->with('lineItems', 'address', 'users')->get();

        return view('user.order.history', compact('user', 'order'));
    }



    protected function invoiceEstimate($md, $userPincode, $sellerPincode, $weight)
    {


        $querystring = [
            'md' => $md,
            'ss' => $this->ss,
            'd_pin' => $userPincode,
            'o_pin' => $sellerPincode,
            'cgm' => $weight,
        ];
        $response = Http::withHeaders($this->delhiveryHeaderLive)->GET("{$this->delhiveryUrlLive}api/kinko/v1/invoice/charges/.json", $querystring);
        return $response[0];
    }


    protected function orderCretionManagement($line_item, $order, $user, $lineItemDB, $address)
    {

        $seller = Seller::find($line_item->seller_id);
        //dump($seller);
        if ($line_item) {

            //dump($address);
            $querystringTest = [
                'format' => 'json',
                'data' => json_encode([
                    "shipments" => [
                        [

                            "add" => $address->address1,
                            "address_type" => $address->type,
                            "phone" => $address->phone_no,
                            "payment_mode" => $order->payment_mode == 0 ? 'COD' : 'Prepaid',
                            "name" => "{$user->first_name} {$user->last_name}",
                            "pin" => $address->pin_code,
                            "order" => $line_item->id,
                            "country" => "India",
                            "cod_amount" => $order->payment_mode == 0 ? $lineItemDB->sum('selling_price') : 0.00,
                            "shipping_mode" => $order->shipping_mode == 0 ? 'Surface' : 'Express',
                        ],
                    ], 'pickup_location' => [
                        "phone" => $seller->phone_number,
                        'name' => $seller->warehouse_id
                    ]
                ])
            ];
            //dump($querystringTest);

            // $querystringTest1 = [
            //     'format' => 'json',
            //     'data' => json_encode([
            //         "shipments" => [
            //             [
            //                 "add" => $address->address1,
            //                 "address_type" => $address->type,
            //                 "phone" => $user->phone_no,
            //                 "payment_mode" => $order->payment_mode == 0 ? 'COD' : 'Prepaid',
            //                 "name" => "{$user->first_name} {$user->last_name}",
            //                 "pin" => $address->pin_code,
            //                 "order" => $line_item->id,
            //                 "country" => "India",
            //                 "state" => $address->state->name,
            //                 "city" => $address->city->name,
            //                 "cod_amount" => $order->payment_mode == 0 ? $lineItemDB->sum('selling_price') : 0.00,
            //                 "shipping_mode" => $order->shipping_mode == 0 ? 'Surface' : 'Express',
            //                 "consignee_gst_amount" => 0.00,
            //                 "integrated_gst_amount" => 0.00,
            //                 "consignee_gst_tin" => null,
            //                 "seller_gst_tin" => null,
            //                 "client_gst_tin" => null,
            //                 "gst_cess_amount" => null,
            //                 "tax_value" => null,
            //                 "gst_cess_amount" => null,
            //                 "seller_gst_amount" => null,
            //                 "gst_cess_amount" => null,
            //                 "weight" => null,
            //                 "gst_cess_amount" => 0.00,
            //                 "seller_cst" => 0.00,
            //                 "seller_name" => 0.00,
            //                 "gst_cess_amount" => 0.00,
            //                 "shipment_height" => 10,
            //                 "shipment_width" => 11,
            //                 "shipment_length" => 12,
            //                 "category_of_goods" => "categoryofgoods",
            //                 "return_country" => "returncountry",
            //                 "shipment_width" => "shipmentwidth",
            //                 "dangerous_good" => "True/False",
            //                 "consignee_tin" => "consigneetin",
            //                 "order_date" => "2017-05-20 12:00:00",
            //                 "total_amount" => 21840,
            //                 "plastic_packaging" => "true",
            //                 "quantity" => "220",
            //             ],
            //         ], 'pickup_location' => [
            //             "phone" => $seller->phone_number,
            //             'name' => $seller->warehouse_id
            //         ]
            //     ])
            // ];
            $curl = curl_init();

            curl_setopt_array($curl, array(
                CURLOPT_URL => 'https://staging-express.delhivery.com/api/cmu/create.json',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS => http_build_query($querystringTest),
                CURLOPT_HTTPHEADER => $this->delhiveryHeaderTestCreateOrder,
            ));

            $response = curl_exec($curl);
            curl_close($curl);
            //dump($response);
            if ($response) {
                $response = json_decode($response);
                if ($response->success == true) {

                    $shipingCharges = $this->invoiceEstimate($order->shipping_mode == 0 ? 'S' : 'E', $address->pin_code, $seller->pin_code, $line_item->weight);
                    //dump($shipingCharges);
                    $lineItemUpdate = $line_item->update(['upload_wbn' => $response->upload_wbn, 'wbns' => $response->packages[0]->waybill, 'shiping_charge' => $shipingCharges['total_amount']]);
                    //dump($lineItemUpdate);
                    if ($lineItemUpdate) {
                        return true;
                    }
                }
            }
        }
        return false;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function history(Order $order)
    {
        //
    }
}
