<?php

namespace App\Http\Controllers\admin\auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminRequest;
use App\Models\Admin;
use App\Models\Seller;
use Illuminate\Support\Facades\Hash;

class RegistrationController extends Controller
{
    public function index()
    {
        return view('admin.auth.register');
    }

    public function adminRegister(AdminRequest $request)
    {
        $adminDetails = $request->all();

        $adminDetails['password'] = Hash::make($adminDetails['password']);

        $adminCreate = Admin::create($adminDetails);

        if ($adminCreate) {
            return redirect(route('admin.login'))->with('success', 'Admin created successfully');
        } else {
            return redirect()->back()->with('error', 'Something went Wrong, failed to register!');
        }
    }
}
