<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public $req;

    public function __construct(Request $request) {
        $this->req = $request;
    }

    public function about() {
        return view('front.user.about');
    }

    public function allMobile() {
        return view('front.user.all-mobile');
    }

    public function emailAddressForm() {
        return view('front.user.email_address');
    }

    public function emailForm() {
        return view('front.user.email');
    }

    public function pin() {
        return view('front.user.pin');
    }

    public function profile() {
        return view('front.user.profile');
    }

    public function phoneNumber() {
        return view('front.user.phone-number');
    }

    public function reffrl() {
        return view('front.user.reffrl');
    }
}
