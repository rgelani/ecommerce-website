<?php

namespace App\Http\Controllers\seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('seller.dashboard');
    }

    public function faq()
    {
        return view('seller.faq');
    }
}