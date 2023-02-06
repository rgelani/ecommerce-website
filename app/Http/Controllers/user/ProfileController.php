<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function index()
    {
        return view('user.my-accounts.profile');
    }
}
