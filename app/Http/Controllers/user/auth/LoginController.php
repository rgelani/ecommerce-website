<?php

namespace App\Http\Controllers\user\auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Tzsk\Otp\Facades\Otp;

class LoginController extends Controller
{
    public function index()
    {
        return view('user.auth.login');
    }

    public function loginUser(Request $request)
    {
        $request->validate([
            'phone_no' => ['required', 'digits:10', 'numeric'],
            'otp' => 'required',
        ]);

        $phoneNumber = $request->post('phone_no');

        $otp = $request->post('otp');

        $checkOtp = Otp::digits(6)->expiry(3)->check($otp, $phoneNumber);

        if ($checkOtp) {

            $user = User::updateOrCreate(['phone_no' => $phoneNumber]);

//            Auth::guard('user')->login($user);
            Auth::guard('user')->setUser($user);

            return response(['msg' => 'User logged in successfully !', 'status' => 200]);
        } else {
            return response(['msg' => 'Incorrect Otp !', 'status' => 422]);
        }
    }

    function logout()
    {
        Auth::guard('user')->logout();
        return redirect(route('dashboard'));
    }
}
