<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Address;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use App\Models\ProductVariantImage;
use App\Models\User;
use App\Models\Variant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

use function PHPSTORM_META\map;

class CheckoutController extends Controller
{
    protected $delhiveryUrlTest, $delhiveryKeyTest, $delhiveryHeader, $delhiveryUrlLive, $delhiveryKeyLive, $delhiveryHeaderLive, $delhiveryHeaderTest, $ss, $md;

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
    }


    public function checkoutPage(Request $request)
    {
        $product = Product::with(['variants', 'productImage', 'seller'])->first();




        // false
        $line_items = collect([
            [
                'product_id' => $product->id ?? null,
                'variant_id' => $product->variants[0]->id ?? null,
                'selling_price' => $product->selling_price ?? 0.00,
                'MRP' => $product->MRP ?? 0.00,
                'total_price' => $product->selling_price  ?? 0.00,
                'tax_total' => 0.00,
                'seller_id' => $product->seller->id ?? null,
                'quantity' => 2 ?? null,
                'sku' => $product->sku ?? null,
                'image' => explode(',', $product->productImage->src ?? '')[0] ?? null,
                'title' => $product->variants[0]->title ?? $product->title ?? '',
                'discription' => $product->discription ?? '',
                'weight' => $product->weight
            ]
        ]);


        $request->session()->put('line_items', $line_items);
        return view('user.order.min-cart', compact('line_items'));
    }

    public function myCart()
    {
    }

    public function shippingCharge()
    {
        if (Session::has('pincode')) {
            $pincode = Session::get('pincode');

            if ($pincode->cod == 'Y' && Session::has('line_items')) {
                $line_items = Session::get('line_items');
                $pincode = Session::get('pincode');

                $newLineItems = $this->invoiceEstimate($line_items, $pincode->pin);
                return response()->json($newLineItems);
            } else {
                return response()->json(['Empty cart']);
            }
        } else {
            return response()->json(['Enter Delivery Pincode']);
        }
    }

    public function checkout(Request $request)
    {
        if (Session::has('line_items')) {
            $cart = Session::get('line_items');
            dd($cart);
        }
    }

    public function liveLocation(Request $request)
    {
    }


    public function pincodeDataGet(Request $request)
    {
        $request->validate([
            'pincode' => 'required|numeric',
        ]);

        $pincodeInfo = json_decode(file_get_contents("$this->delhiveryUrlTest/c/api/pin-codes/json/?token=$this->delhiveryKeyTest&filter_codes=$request->pincode"));
        if (!$pincodeInfo->delivery_codes && isset($pincodeInfo->delivery_codes[0]->postal_code)) {
            return response()->json(['error' => 'invalid pincode']);
        }

        $request->session()->put('pincode', $pincodeInfo->delivery_codes[0]->postal_code);
        return response()->json(['success' => 'verify pincode']);
    }

    public function orderCretionManagement(Request $request)
    {

        if (Session::has('line_items')) {
            $line_items = Session::get('line_items');
            // $wayBill = $this->wayBillCreate('5');

            $delhiveryHeaderTest = [
                'Authorization: Token ' . $this->delhiveryKeyTest,
                'Content-Type: application/json',
                'Accept: application/json',
            ];
            $newLineItems = [];
            $user = Auth::user();
            foreach ($line_items as $line_item) {

                $variant = Variant::with('product')->find($line_item['variant_id']);



                $address = Address::where(['status' => '1', 'user_id' => $user->id])->first();
                $querystringTest = [
                    'format' => 'json',
                    'data' => json_encode([
                        "shipments" => [
                            [
                                "add" => $address->address1,
                                "address_type" => $address->type,
                                "phone" => $user->phone_no,
                                "payment_mode" => "COD",
                                "name" => "{$user->first_name} {$user->last_name}",
                                "pin" => $address->pincode,
                                "order" => Str::random(10),
                                "country" => "India",
                                "cod_amount" => 1293.89,
                                "shipping_mode" => "Surface",

                            ]
                        ]
                    ])
                ];


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
                    CURLOPT_HTTPHEADER => $delhiveryHeaderTest,
                ));

                $response = curl_exec($curl);
            }


            curl_close($curl);
            echo $response;
        }
    }

    protected function invoiceEstimate($line_items, $pincode)
    {

        $newLineItems = [];
        foreach ($line_items as $line_item) {

            $variant = Variant::with('product')->find($line_item['variant']);
            $querystring = [
                'md' => $this->md,
                'ss' => $this->ss,
                'd_pin' => "$pincode",
                'o_pin' => "{$variant->product->seller->pin_code}",
                'cgm' => "{$variant->product->weight}",
            ];
            $response = Http::withHeaders($this->delhiveryHeaderLive)->GET("{$this->delhiveryUrlLive}api/kinko/v1/invoice/charges/.json", $querystring);
            $line_item['charge'] = $response[0];
            $newLineItems[] = $line_item;
        }
        return $newLineItems;
    }

    protected function wayBillCreate(Request $request)
    {
        // $numberOfLineItem = 5;
        return json_decode(file_get_contents("$this->delhiveryUrlTest/waybill/api/bulk/json/?token=$this->delhiveryKeyTest&count=$      "));
    }

    public function clientWareHouse(Request $request)
    {
        $querystring = [
            "phone" => "9099666907",
            "city" => "Kota",
            "name" => "test1234567890",
            "pin" => "324005",
            "address" => "xyzzfadfa",
            "country" => "India",
            "email" => "abc@gmail.com",
            "registered_name" => "registered username",
            "return_address" => "xyzzfadfa",
            "return_pin" => "324005",
            "return_city" => "Kota",
            "return_state" => "Delhi",
            "return_country" => "India"
        ];
        $response = Http::withHeaders($this->delhiveryHeaderTest)->POST("$this->delhiveryUrlTest/api/backend/clientwarehouse/create/", $querystring);
        return ($response);
    }

    public function packingSlip()
    {

        $response = Http::withHeaders($this->delhiveryHeaderTest)->GET("$this->delhiveryUrlTest/api/p/packing_slip", ['wbns' => '5842510000276']);


        return ($response);
    }

    public function image()
    {
        $response = Http::withHeaders($this->delhiveryHeaderTest)->GET("https://staging-express.delhivery.com/static/images/new_logo.png");


        return ($response);
    }

    public function add_to_cart ($productid) {
        $user_id = "e9e3adb0-1cab-11ed-8c06-ddab65f4bf78"; // Auth::user()->id
        $cart = Cart::where(['product_id' => $productid, 'order_id' => null, 'deleted_at' => null]);

        if($cart->first() === null){
            Cart::create([
                'user_id' => $user_id,
                'product_id' => $productid,
            ]);
        }else{
            $this->add_quantity($productid, false);
        }

        return $this->my_cart();
    }

    public function add_quantity ($productid, $redirect = true) 
    {
        $user_id = "e9e3adb0-1cab-11ed-8c06-ddab65f4bf78"; // Auth::user()->id
        $cart = Cart::where(['product_id' => $productid, 'order_id' => null, 'deleted_at' => null]);
        $cart->update([
            'quantity' => $cart->first()->quantity + 1
        ]);

        if($redirect){
            return redirect()->route('my_cart');
        }
    }

    public function remove_from_cart ($productid)
    { 
        $user_id = "e9e3adb0-1cab-11ed-8c06-ddab65f4bf78";
        $details = Cart::where([
            'user_id' => $user_id,
            'product_id' => $productid,
            'deleted_at' => null,
        ]);
        if($details->first() !== null)
        {
            $details->delete();
        }

        return redirect()->route('my_cart');
    }

    public function remove_quantity ($productid)
    {
        $user_id = "e9e3adb0-1cab-11ed-8c06-ddab65f4bf78";
        $details = Cart::where([
            'user_id' => $user_id,
            'product_id' => $productid,
            'deleted_at' => null,
        ]);

        if($details->first() === null || $details->first()?->quantity === 1)
        {
            return $this->remove_from_cart($productid);
        } else {
            $details->update([
                'quantity' => $details->first()->quantity - 1
            ]);
            return redirect()->route('my_cart');
        }
    }

    public function my_cart () 
    {
        $user_id = "e9e3adb0-1cab-11ed-8c06-ddab65f4bf78"; // Auth::user()->id
        $response = Cart::with('products')->where(['user_id' => $user_id, "order_id" => null, 'deleted_at' => null])->get();
        $total = DB::table('carts')
        ->join('products', 'products.id', '=', 'carts.product_id')
        ->where(['carts.order_id' => null, 'carts.deleted_at' => null])
        ->select(
            DB::raw("SUM(products.selling_price*carts.quantity) as total_price"), 
            DB::raw("SUM(products.zonal_delivery_charge) as total_delivery_charges"),
            DB::raw("SUM(carts.quantity) as total_quantity")
        )
        ->first();

        return view('user.order.cart', compact('response', 'total'));
    }

    public function placeOrder () 
    {
        $user_id = "e9e3adb0-1cab-11ed-8c06-ddab65f4bf78"; // Auth::user()->id
        $total = DB::table('carts')
        ->join('products', 'products.id', "=",'carts.product_id')
        ->where(['carts.order_id' => null, 'carts.deleted_at' => null])
        ->select( 
            DB::raw("SUM(products.selling_price*carts.quantity) as total_price"),
            DB::raw("SUM(products.zonal_delivery_charge) as total_delivery_charges"),
            DB::raw("SUM(carts.quantity) as total_quantity")
        )
        ->first();
        
        $order = Order::create([
            'user_id' => $user_id,
            'address_id' => 'e9ebca30-1cab-11ed-8046-cfd105dfadce',
            'email' => 'harvey.pattie@example.net',
            'shipping_charge' => $total->total_delivery_charges,
            'total' => $total->total_price,
        ]);
            
        Cart::where(['user_id' => $user_id, "order_id" => null])->update([
            'order_id' => $order->id
        ]);
            
        return redirect()->route('dashboard');
    }
}