<?php

namespace App\Http\Controllers\user\api;

use App\Helpers\ImageCommonHelpers;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserRegisterRequest;
use App\Jobs\UserOtpEmailJob;
use App\Models\User;
use App\Rules\OnlyGmail;
use Carbon\Carbon;
use Dflydev\DotAccessData\Data;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Tzsk\Otp\Facades\Otp;

class ApiController extends Controller
{
    public function generateOtp(Request $request)
    {
        $otpDigits = 6;
        $expiryMinute = 3;

        $request->validate([
            'email' => ['required', 'unique:users', 'max:255', new OnlyGmail],
        ]);

        $email = $request->post('email');

        $otp = Otp::digits($otpDigits)->expiry($expiryMinute)->generate($email);

        $otpExpiredTime = Carbon::now()->addMinutes($expiryMinute);

        if ($otp) {

            \App\Models\Otp::updateOrCreate([
                'types' => '1',
                'email' => $email,
            ], [
                'otp' => $otp,
                'expired_at' => $otpExpiredTime,
            ]);

            $mailDetails = [
                'email' => $email,
                'otp' => $otp,
            ];

            $this->dispatch(new UserOtpEmailJob($mailDetails));

            return response(["status" => 200, "message" => "OTP sent successfully, Please check your mail !", "email" => $email]);
        } else {
            return response(["status" => 422, 'message' => 'Oops something went wrong !']);
        }
    }

    public function validateOtp(Request $request)
    {
        $otpDigits = 6;
        $expiryMinute = 3;

        $request->validate([
            'email' => 'required',
            'otp' => 'required',
        ]);

        $email = $request->post('email');

        $otp = $request->post('otp');

        $checkOtp = Otp::digits($otpDigits)->expiry($expiryMinute)->check($otp, $email);

        if ($checkOtp) {
            return response(["status" => 200, "message" => "Email verification is successfully completed !"]);
        } else {
            return response(["status" => 422, 'message' => 'Your OTP is expire or Invalid OTP please send again!']);
        }
    }

    public function register(UserRegisterRequest $request)
    {
        $userAccounts = User::create($request->all());

        if ($userAccounts) {
            return response(["status" => 200, 'message' => 'User account created successfully!']);
        } else {
            return response(["status" => 422, 'message' => 'Oops something went wrong, Please try again later !']);
        }
    }
}
