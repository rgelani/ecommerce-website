<?php

namespace App\Http\Controllers\seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        $authUser = Auth::user();
        return view('seller.profile.profile',compact('authUser'));
    }

    public function changeAccountPassword()
    {
        $authUser = Auth::user();
        return view('seller.profile.change-password',compact('authUser'));
    }

    public function bankDetails()
    {
        $authUser = Auth::user();
        return view('seller.profile.bank-details',compact('authUser'));
    }
}
