<?php

namespace App\Http\Controllers\user\auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRegisterRequest;
use App\Models\User;
use App\Rules\OnlyGmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Tzsk\Otp\Facades\Otp;

class RegistrationController extends Controller
{
    public function index()
    {
        return view('user.auth.register');
    }

    public function validateUserEmail(Request $request)
    {
        $request->validate([
            'email' => ['required', 'unique:users', 'max:255', new OnlyGmail],
        ]);

        return response(["status" => 200, "message" => "Email is verified successfully !"]);
    }

    public function sendUserOtp(Request $request)
    {
        $request->validate([
            'phone_no' => ['required','digits:10', 'numeric'],
        ]);

        $phoneNumber = $request->post('phone_no');

        $otp = Otp::digits(6)->expiry(3)->generate($phoneNumber);

        Log::info("Your Otp :- " . $otp);

        if ($otp) {
            return response(["status" => 200, "message" => "Sent verification code on your local system " . env('APP_NAME') . "/storage/logs/xyz.log"]);
        } else {
            return response(["status" => 422, 'message' => 'Oops something went wrong !']);
        }

        // Fast2Sms API Code

//        $url = 'https://www.fast2sms.com/dev/bulkV2';
//
//        $requestData = [
//            'variables_values' => $otp,
//            'route' => "otp",
//            'numbers' => $phoneNumber,
//        ];
//
//        $response = Http::withHeaders([
//            'authorization' => env('FAST_2_SMS_API_KEY'),
//            'Content' => 'application/json',
//            'Accept' => 'application/json',
//        ])->post($url, $requestData);
//
//        $responseJson = $response->json();
//
//        if ($responseJson['return']) {
//            return response(["status" => 200, "message" => "We have sent verification code on your phone number !"]);
//        } else {
//            return response(["status" => 422, 'message' => 'Oops something went wrong !']);
//        }
    }

    public function validateUserOtp(Request $request)
    {
        $request->validate([
            'phone_no' => ['required', 'unique:users','digits:10', 'numeric'],
            'otp' => 'required',
        ]);

        $phoneNumber = $request->post('phone_no');

        $otp = $request->post('otp');

        $checkOtp = Otp::digits(6)->expiry(3)->check($otp, $phoneNumber);

        if ($checkOtp) {
            return response(["status" => 200, "message" => "Phone verification is successfully completed !"]);
        } else {
            return response(["status" => 422, 'message' => 'Your OTP is expire or Invalid OTP please send again!']);
        }
    }

    public function registeredNewUser(UserRegisterRequest $request)
    {
        $requestedData = $request->except(['_token', 'confirm_password']);

        $requestedData['password'] = Hash::make($requestedData['password']);

        $registeredNewUser = User::create($requestedData);

        if ($registeredNewUser) {
            return response(['msg' => 'User registered successfully !', 'status' => 200]);
        } else {
            return response(['msg' => 'Something went wrong with registration process !', 'status' => 422]);
        }
    }
}
