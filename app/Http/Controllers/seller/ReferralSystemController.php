<?php

namespace App\Http\Controllers\seller;

use App\Http\Controllers\Controller;
use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReferralSystemController extends Controller
{
    public function index()
    {
        $appUrl = getenv('APP_URL');
        $referralUrl = $appUrl . '/seller/referral/refer/' . Auth::user()->seller_referred_id;
        return view('seller.referral.index', compact('referralUrl'));
    }

    public function referRegister($id){
        $countries = Country::pluck('name', 'id');
        return view('seller.auth.register', compact('countries','id'));
    }
}
