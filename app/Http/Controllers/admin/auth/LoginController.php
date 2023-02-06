<?php

namespace App\Http\Controllers\admin\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function index(){
        return view('admin.auth.login');
    }

    public function adminValidate(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|exists:admins,email','max:255',
            'password' => 'required|min:5|max:30',
        ], [
            'email.exists' => 'You are not registered admin !',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->with('error', $validator->errors()->first());
        }

        $verifyCred = $request->only('email', 'password');

        if (Auth::guard('admin')->attempt($verifyCred)) {
            return redirect()->route('admin.dashboard');
        } else {
            return redirect()->route('admin.login')->with('error', 'Password is Incorrect !');
        }
    }

    function logout()
    {
        Auth::guard('admin')->logout();
        return redirect(route('admin.login'));
    }
}
