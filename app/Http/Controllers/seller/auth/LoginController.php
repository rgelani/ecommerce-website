<?php

namespace App\Http\Controllers\seller\auth;

use App\Http\Controllers\Controller;
use App\Models\Seller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function index(){
        return view('seller.auth.login');
    }

    public function validateSeller(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|exists:sellers,email','max:255',
            'password' => 'required|min:5|max:30',
        ], [
            'email.exists' => 'You are not registered seller, Please register your seller account !',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->with('error', $validator->errors()->first());
        }

        $sellerConfirmation = Seller::select('status')->where('email',$request->post('email'))->first();
        
        if($sellerConfirmation->status == 1){
            $verifyCred = $request->only('email', 'password');
            if (Auth::guard('seller')->attempt($verifyCred)) {
                return redirect()->route('seller.dashboard');
            } else {
                return redirect()->route('seller.login')->with('error', 'Password is Incorrect !');
            }
        } else if($sellerConfirmation->status == 0){
            return redirect()->route('seller.login')->with('info', 'Your seller account is pending when we review your account after you are eligible for selling on I - Kart Ecommerce Online Selling Platforms !');
        }else{
            return redirect()->route('seller.login')->with('error', 'Your Seller account is deactivated please contact seller support for further assist !');
        }

    }

    function logout()
    {
        Auth::guard('seller')->logout();
        return redirect(route('seller.login'));
    }
}
