<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Mail\SellerAccountActivationMail;
use App\Mail\SellerAccountDeactivationMail;
use App\Models\City;
use App\Models\Seller;
use App\Models\State;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class SellerController extends Controller
{

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

    public function orderApproval()
    {
        return;
    }


    public function warehouseCeate($id)
    {

        $seller = Seller::with(["city", "state"])->find($id);

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

            info('querystring--------------');
            info($querystring);

            $response = Http::withHeaders($this->delhiveryHeaderTest)->POST("$this->delhiveryUrlTest/api/backend/clientwarehouse/create/", $querystring);

            info('response----------------');
            info($response);
            if (!empty($response) && $response['success'] == true) {
                $seller->warehouse_id = $warehouseId;
                $seller->update();
                if ($seller) {
                    return response()->json(['success' => 'warehouse create successfully']);
                    return true;
                }
            }
            // return response()->json(['error' => 'wrong']);
        }
        return false;

        // return response()->json(['error' => 'no pickup available.']);
    }
    private function decriptName($id)
    {
        return $id . Str::random(10);
    }

    public function list() {
        $states = State::get();
        $stateIds = $states->pluck('id');
        $cities = City::whereIn('state_id', $stateIds)->get();
        return view('admin.seller.list', compact('states', 'cities'));
    }

    public function holdSeller() {
        $states = State::get();
        $stateIds = $states->pluck('id');
        $cities = City::whereIn('state_id', $stateIds)->get();
        return view('admin.seller.hold_seller', compact('states', 'cities'));
    }

    public function holdSellerAjax(Request $request) {
        $requestPage = $request->page ? $request->page : 1;
        $state = $request->state ? $request->state : [];
        $city = $request->city ? $request->city : [];
        $sellers = Seller::join('states', 'states.id', '=', 'sellers.state_id')
                ->join('cities', 'cities.id', '=', 'sellers.city_id')
                ->select('sellers.id','sellers.first_name', 'sellers.last_name', 'sellers.phone_number', 'sellers.pickup_address',
                'sellers.email', 'sellers.company_name', 'sellers.ifsc_code', 'sellers.bank_account_number', 'sellers.gst_number', 'states.name as state_name', 'cities.name as city_name')
                ->when(!empty($state), function($q1) use($state) {
                    $q1->whereIn('sellers.state_id', $state);
                })
                ->when(!empty($city), function($q1) use($city) {
                    $q1->whereIn('sellers.city_id', $city);
                });
        if($request->approval == 'true') {   
            $sellers = $sellers->paginate(8); 
            $data = \View::make('admin.seller.render_approved_seller', compact('sellers'));
        } else {
            if($request->hold == 'true') {
                $sellers = $sellers->where('is_hold', 1)->paginate(8);
            } else {
                $sellers = $sellers->where('is_hold', 0)->paginate(8);
            }
            $hold_seller = $request->hold == 'true' ? false : true;
            $data = \View::make('admin.seller.render_seller', compact('sellers', 'hold_seller'));
        }
        $links = $sellers->links();
        $links = $links['elements'][0];
        $finalLinks = [];
        $finalLinks['prev'] = ($requestPage - 1) > 0 && $requestPage > 0 ? $links[$requestPage - 1] : '#';
        $finalLinks['next'] = ($requestPage + 1) <= count($links) && $requestPage > 0 ? $links[$requestPage + 1] : '#';
        if(count($sellers) > 0) {
            $finalLinks['active'] = $links[$requestPage];
            if(count($links) > 10) {
                $finalLinks['status'] = 'custom';
                if($requestPage == 1 || $requestPage == 2 || $requestPage == count($links) || $requestPage == count($links) - 1) {
                    $finalLinks['links'][0] = [1, $links[1]];
                    $finalLinks['links'][1] = [2, $links[2]];
                    $finalLinks['links'][2] = [3, $links[3]];
                    $finalLinks['links'][3] = ['...', '#'];
                    $finalLinks['links'][4] = [count($links) - 2, $links[count($links) - 2]];
                    $finalLinks['links'][5] = [count($links) - 1, $links[count($links) - 1]];
                    $finalLinks['links'][6] = [count($links), $links[count($links)]];
                } else {
                    $finalLinks['links'][0] = [1, $links[1]];
                    $finalLinks['links'][1] = ['...', '#'];
                    $finalLinks['links'][2] = [$requestPage - 1, $links[$requestPage - 1]];
                    $finalLinks['links'][3] = [$requestPage, $links[$requestPage]];
                    $finalLinks['links'][4] = [$requestPage + 1, $links[$requestPage + 1]];
                    $finalLinks['links'][5] = ['...', '#'];
                    $finalLinks['links'][6] = [count($links), $links[count($links)]];
                }
            } else {
                foreach($links as $key => $link) {
                    $finalLinks['links'][] = [$key, $link];
                }
            }
        }
        // $paginationLinks = \View::make('admin.seller.paginate', compact('finalLinks'));
        return [''.$data, $finalLinks];
    }

    public function unHoldSeller() {
        $states = State::get();
        $stateIds = $states->pluck('id');
        $cities = City::whereIn('state_id', $stateIds)->get();
        return view('admin.seller.unhold_seller', compact('states', 'cities'));
    }

    public function approvedSeller() {
        $states = State::get();
        $stateIds = $states->pluck('id');
        $cities = City::whereIn('state_id', $stateIds)->get();
        return view('admin.seller.approved_seller', compact('states', 'cities'));
    }

    public function index()
    {

        $status = '0';
        $states = State::with('cities')->get();

        $stateIds = $states->pluck('id');

        $cities = City::whereIn('state_id', $stateIds)->get();

        $sellers = Seller::where('status', "$status")->with('state', 'city')->paginate(9);
        
        return view('admin.seller.list', compact('sellers', 'states', 'cities', 'status'));
    }

    public function approval(Request $request)
    {

        if ($request->id) {
            $seller = Seller::find($request->id);
            if ($request->status == '1') {
                if ($this->warehouseCeate($request->id)) {
                    $sellerAccountMail = new SellerAccountActivationMail($seller);
                    Mail::to($seller->email)->send($sellerAccountMail);
                    $seller->update(['status' => $request->status]);
                } else {
                    $sellerAccountMail = new SellerAccountDeactivationMail($seller);
                    Mail::to($seller->email)->send($sellerAccountMail);
                    $seller->update(['status' => 0]);
                }
            } else {
                $sellerAccountMail = new SellerAccountDeactivationMail($seller);

                Mail::to($seller->email)->send($sellerAccountMail);
                $seller->update(['status' => $request->status]);
            }
        } else if ($request->ids) {

            $sellers = Seller::whereIn('id', $request->ids)->get();

            foreach ($sellers as $key => $seller) {
                # code...
                if ($request->status == '1') {

                    if ($this->warehouseCeate($seller->id)) {
                        $sellerAccountMail = new SellerAccountActivationMail($seller);
                        Mail::to($seller->email)->send($sellerAccountMail);
                        $seller->update(['status' => $request->status]);
                    } else {
                        $sellerAccountMail = new SellerAccountDeactivationMail($seller);
                        Mail::to($seller->email)->send($sellerAccountMail);
                        $seller->update(['status' => 0]);
                    }
                } else {

                    $sellerAccountMail = new SellerAccountDeactivationMail($seller);
                    Mail::to($seller->email)->send($sellerAccountMail);
                    $seller->update(['status' => $request->status]);
                }
            }

            $sellerAccountIds = $seller->get();
        }

        return response()->json();
    }

    public function searchSellerAccounts(Request $request)
    {
        $sellers = Seller::where(function ($query) use ($request) {
            return $query->where('status', '=', $request->status);
        })->where(function ($query) use ($request) {
            return $query->where('email', 'LIKE', '%' . $request->post('search') . '%')->orWhere('phone_number', 'LIKE', '%' . $request->post('search') . '%');
        })->where(function ($query) use ($request) {
            if ($request->post('states') !== null)
                return  $query->whereIn('state_id', $request->post('states'));
            else
                return $query;
        })->where(function ($query) use ($request) {
            if ($request->post('cities') !== null)
                return  $query->whereIn('city_id', $request->post('cities'));
            else
                return $query;
        })->with('state', 'city')->paginate(9);

        return view("admin.seller.$request->page", compact('sellers'))->render();
    }

    // public function holdSeller()
    // {

    //     $status = "1";

    //     $states = State::with('cities')->get();
    //     $stateIds = $states->pluck('id');

    //     $cities = City::whereIn('state_id', $stateIds)->get();
    //     $sellers = Seller::where('status', "$status")->with('state', 'city')->paginate(9);
    //     return view('admin.seller.hold-seller', compact('sellers', 'status', 'cities', 'states'));
    // }

    // public function unHoldSeller()
    // {


    //     $status = '3';
    //     $states = State::with('cities')->get();
    //     $stateIds = $states->pluck('id');
    //     $cities = City::whereIn('state_id', $stateIds)->get();
    //     $sellers = Seller::where('status', "$status")->with('state', 'city')->paginate(9);
    //     return view('admin.seller.unhold-seller', compact('sellers', 'status', 'cities', 'states'));
    // }

    public function searchBarSellerAccounts(Request $request)
    {
        if ($request->ajax()) {

            $search = $request->post('search');

            $sellers = Seller::with('state', 'city')->query();

            $sellerSearching = ['email', 'phone_number'];

            if (isset($search)) {
                foreach ($sellerSearching as $findSeller) {
                    $sellers->orWhere($findSeller, 'LIKE', '%' . $search . '%');
                }
            }

            $sellers = $sellers->paginate(15);

            // return view('admin.seller.hold-render-list', compact('sellers'))->render();
        }
    }

    public function sellerHold(Request $request)
    {
        if ($request->id) {
            $seller = Seller::where('id', $request->id);

            $seller->update(['status' => '3']);
        } else if ($request->ids) {

            $seller = Seller::whereIn('id', $request->ids);

            $seller->update(['status' => '3']);
        }

        return response()->json();
    }

    public function sellerUnHold(Request $request)
    {
        if ($request->id) {
            $seller = Seller::where('id', $request->id);

            $seller->update(['status' => '1']);
        } else if ($request->ids) {

            $seller = Seller::whereIn('id', $request->ids);

            $seller->update(['status' => '1']);
        }

        return response()->json();
    }
}