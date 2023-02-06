<?php

namespace App\Http\Controllers\seller;

use App\DataTables\ProductDataTable;
use App\DataTables\Seller\CancelOrderDataTable;
use App\DataTables\Seller\DeliveryOrderDataTable;
use App\DataTables\Seller\InProcessOrderDataTable;
use App\DataTables\Seller\NewOrderDataTable;
use App\DataTables\Seller\OrderDataTable;
use App\DataTables\Seller\PendingOrderDataTable;
use App\DataTables\Seller\ReadyToShipOrderDataTable;
use App\DataTables\Seller\returnOrderDatatable;
use App\DataTables\Seller\ShippingOrderDataTable;
use App\Http\Controllers\Controller;
use App\Models\Line_item;
use App\Models\Order;
use App\Models\Seller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use PDF;
use Illuminate\Support\Str;

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

    public function orderApproval()
    {
        return;
    }

    public function warehouseCeate()
    {

        $seller = Seller::with(["city", "state"])->first();

        $warehouseId = $this->decriptName($seller->id);
        $pincodeInfo = json_decode(file_get_contents("$this->delhiveryUrlTest/c/api/pin-codes/json/?token=$this->delhiveryKeyTest&filter_codes=$seller->pin_code"));
        if (isset($pincodeInfo->delivery_codes[0]->postal_code->pickup) && $pincodeInfo->delivery_codes[0]->postal_code->pickup == 'Y') {
            $querystring = [
                "phone" => $seller->phone_number,
                "city" => $seller->city->name,
                "name" => $warehouseId,
                "pin" => "$seller->pin_code",
                "address" => $seller->pickup_address,
                "country" => "India",
                "email" => $seller->email,
                "registered_name" => "{$seller->first_name} {$seller->last_name}",
                "return_address" => $seller->pickup_address,
                "return_pin" => "$seller->pin_code",
                "return_city" => $seller->city->name,
                "return_state" => $seller->state->name,
                "return_country" => "India"
            ];

            $response = Http::withHeaders($this->delhiveryHeaderLive)->POST("$this->delhiveryUrlLive/api/backend/clientwarehouse/create/", $querystring);
            // $seller->update();

            if (!empty($response) && $response['success'] == true) {
                $seller->warehouse_id = $warehouseId;
                $seller->update();
                if ($seller) {
                    return response()->json(['success' => 'warehouse create successfully']);
                }
            }
            return response()->json(['error' => 'wrong']);
        }
        return response()->json(['error' => 'no pickup available.']);
    }

    private function decriptName($id)
    {
        return encrypt($id) . Str::random(10);
    }

    public function newOrder(NewOrderDataTable $dataTable)
    {
        return $dataTable->render('seller.order.new_order');
    }

    public function panddingOrder(PendingOrderDataTable $dataTable)
    {
        return $dataTable->render('seller.order.pandding_order');
    }

    public function RedyToShipOrder(ReadyToShipOrderDataTable $dataTable)
    {
        $order =  Line_item::get()->pluck('id')->implode(',');
        return $dataTable->render('seller.order.ready_to_ship', compact('order'));
    }

    public function inProcessOrder(InProcessOrderDataTable $dataTable)
    {
        return $dataTable->render('seller.order.in_process');
    }

    public function shippedOrder(ShippingOrderDataTable $dataTable)
    {
        return $dataTable->render('seller.order.shipping_order');
    }

    public function diveredOrder(DeliveryOrderDataTable $dataTable)
    {
        return $dataTable->render('seller.order.delivery_order');
    }
    public function cancelOrder(CancelOrderDataTable $dataTable)
    {
        return $dataTable->render('seller.order.cancel_order');
    }
    public function returnOrder(returnOrderDatatable $dataTable)
    {
        return $dataTable->render('seller.order.return_order');
    }

    public function manifestSingle(Request $request)
    {
        $id = explode(',', $request->id);
        $data['data']['lineItems'] = Line_item::with(['order'])->whereIn('id',  gettype($id) == 'string' ? [$id] : $id)->get();
        $pdf = PDF::loadView('seller.order.manifest.single', $data);

        return $pdf->stream();
        // return $pdf->download();
    }
    public function lebalInvoice(Request $request)
    {
        $id = explode(',', $request->id);
        $data['data']['lineItems'] = Line_item::with(['order'])->whereIn('id',  gettype($id) == 'string' ? [$id] : $id)->get();
        $pdf = PDF::loadView('seller.order.lebal_invoice.single', $data);

        return $pdf->stream();
        return $pdf->download();
    }


    public function pickupRequest(Request $request)
    {
        $date = strtotime($request->date);
        $seller = Auth::guard('seller')->user();
        $querystring = [
            "pickup_time" => date('h:m:s', $date),
            "pickup_date" => date('Y-m-d', $date),
            "pickup_location" => $seller->warehouse_id,
            "expected_package_count" => Line_item::where(['seller_id' => $seller->id, 'status' => '1'])->sum('quantity'),
        ];
        $response = Http::withHeaders($this->delhiveryHeaderTest)->POST("$this->delhiveryUrlTest/fm/request/new/", $querystring);
        return ($response);
    }

    public function unaccepted(Request $request)
    {
        $response = Line_item::find($request->id)->update(['status' => '2', 'penalty' => '100']);
        if ($response)
            return response()->json(['success' => 'success']);
        else
            return response()->json(['error' => 'error']);
    }

    public function accept(Request $request)
    {

        if ($request->ids) {
            $lineItems = Line_item::whereIn('id', $request->ids)->with(['seller', 'product', 'variant', 'order'])->get();
            info('lineItems');
            info($lineItems);
            // print_r($lineItems[0]->order);
            // dd();
            foreach ($lineItems as $key => $lineItem) {
                $status = $this->orderCretionManagement($lineItem);
                if ($status == true) {
                    // return response()->json('success');
                } else {

                    return response()->json($status);
                }
            }
            // return response()->json('success');
        }
    }


    protected function orderCretionManagement($lineitem)
    {

        if ($lineitem) {

            $querystringTest = [
                'format' => 'json',
                'data' => json_encode([
                    "shipments" => [
                        [

                            "add" => $lineitem->order->address->address1,
                            "address_type" => $lineitem->order->address->type,
                            "phone" => $lineitem->order->address->phone_no,
                            "payment_mode" => $lineitem->order->payment_mode == 0 ? 'COD' : 'Prepaid',
                            "name" => $lineitem->order->address->name ?? '',
                            "pin" => $lineitem->order->address->pin_code,
                            "order" => $lineitem->id,
                            "city" => $lineitem->order->address->city->name,
                            "country" => "India",
                            "total_amount" => $lineitem->total_price,
                            "quantity" => $lineitem->quantity,
                            "cod_amount" => empty($lineitem->order->payment_mode) ? $lineitem->total_price : 0.00,
                            "shipping_mode" => $lineitem->order->shipping_mode == 0 ? 'Surface' : 'Express'
                        ]
                    ], 'pickup_location' => [
                        "phone" => $lineitem->seller->phone_number,
                        'name' => $lineitem->seller->warehouse_id
                    ]
                ])
            ];
            // dd(http_build_query($querystringTest));

            info('querystringTest');
            info($querystringTest);
            // dd($querystringTest);
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
                CURLOPT_URL => $this->delhiveryUrlTest . 'api/cmu/create.json',
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
            info('culeresponse---------');
            info($response);
            // echo "<pre>";
            // dd($response);
            if ($response) {
                $response = json_decode($response);


                if ($response->success == true && $response->packages) {

                    $shipingCharges = $this->invoiceEstimate($lineitem->order->shipping_mode == 0 ? 'S' : 'E', $lineitem->order->address->pin_code, $lineitem->seller->pin_code, $lineitem->weight);

                    info('shipingCharges-------');
                    info($shipingCharges);

                    if ($shipingCharges) {

                        $responseSlip = Http::withHeaders($this->delhiveryHeaderTest)->GET("$this->delhiveryUrlTest/api/p/packing_slip", ['wbns' => $response->packages[0]->waybill]);
                        info('responseSlip----------');
                        info($responseSlip);
                        if ($responseSlip) {
                            $lineItemUpdate = $lineitem->update(['upload_wbn' => $response->upload_wbn, 'wbns' => $response->packages[0]->waybill, 'shiping_charge' => $shipingCharges['total_amount'], 'status' => '1', 'barcode' => $responseSlip['packages'][0]['barcode'], 'oid_barcode' => $responseSlip['packages'][0]['oid_barcode']]);
                            info('lineItemUpdate----------');
                            info($lineItemUpdate);
                            if ($lineItemUpdate) {

                                return true;
                            }
                        } else {
                            dd($responseSlip);
                        }
                    } else {
                        dd($shipingCharges);
                    }
                } else {
                    dd('responseSlip');
                }
            } else {
                dd($response);
            }
        }
        dd('sdasd');
        // return false;
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
}