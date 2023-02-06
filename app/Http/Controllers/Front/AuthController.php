<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{

    public $req;

    public function __construct(Request $request) {
        $this->req = $request;
    }

    public function loginForm() {
        return view('front.auth.login');
    }
}
