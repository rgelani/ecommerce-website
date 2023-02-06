<?php

namespace App\Http\Controllers\seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PackagingController extends Controller
{
    public function index(){
        return view('seller.packaging.packaging');
    }

    public function innerpolythene(){
        return view('seller.packaging.innerpolythenes');
    }

    public function mainpolythene(){
        return view('seller.packaging.mainpolythenes');
    }
    
    public function safetycover(){
        return view('seller.packaging.safetycover');
    }
}
