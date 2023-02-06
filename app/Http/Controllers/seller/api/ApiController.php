<?php

namespace App\Http\Controllers\seller\api;

use App\Helpers\ImageCommonHelpers;
use App\Http\Controllers\Controller;
use App\Http\Requests\ChangeAccountPasswordRequest;
use App\Http\Requests\SellerAccountPasswordChange;
use App\Http\Requests\SellerBankRequest;
use App\Jobs\SellerOtpEmailJob;
use App\Models\Category;
use App\Models\Seller;
use App\Models\User;
use App\Models\General;
use App\Rules\OnlyGmail;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Tzsk\Otp\Facades\Otp;
use Illuminate\Support\Facades\Config;

class ApiController extends Controller
{
    public function generateOtp(Request $request)
    {
        $otpDigits = 6;
        $expiryMinute = 3;

        $request->validate([
            'email' => ['required', 'unique:sellers', 'max:255', new OnlyGmail],
        ]);

        $email = $request->post('email');

        $otp = Otp::digits($otpDigits)->expiry($expiryMinute)->generate($email);

        $otpExpiredTime = Carbon::now()->addMinutes($expiryMinute);

        if ($otp) {

            \App\Models\Otp::updateOrCreate([
                'types' => '0',
                'email' => $email,
            ], [
                'otp' => $otp,
                'expired_at' => $otpExpiredTime,
            ]);

            $mailDetails = [
                'email' => $email,
                'otp' => $otp,
            ];

            $this->dispatch(new SellerOtpEmailJob($mailDetails));

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

    public function validateGstNumber(Request $request)
    {
        $request->validate([
            'gst_number' => ['required', 'unique:sellers'],
        ]);

        $regex = "/^([0][1-9]|[1-2][0-9]|[3][0-5])([a-zA-Z]{5}[0-9]{4}[a-zA-Z]{1}[1-9a-zA-Z]{1}[zZ]{1}[0-9a-zA-Z]{1})+$/";

        $validateGstNumber = preg_match($regex, $request->post('gst_number'));

        if (!empty($validateGstNumber)) {
            $gstNumber = General::ValidateGSTNUMBER($request->post('gst_number'));
            return response(["data" => $gstNumber,"status" => 200, "message" => "Gst number is successfully verified !"]);
        } else {
            return response(["status" => 422, "message" => "Please check your Gst number !"]);
        }
    }

    public function mainCategory()
    {
        $categories = Category::where('parent_id', 0)->limit(18)->orderBy('id', 'ASC')->get();
        return response()->json($categories);
    }

    public function childCategory($category_id)
    {
        $first = Category::select('id', 'name', 'slug')->where('parent_id', $category_id)->get();
        $single = [];
        $double = [];
        foreach ($first as $f) {
            $childrens = Category::select('id', 'name', 'slug')->where('parent_id', $f->id)->limit(4)->orderBy('id', 'DESC')->get();
            if (count($childrens) > 0) {
                $f->childrens = $childrens;
                $double[] = $f;
            } else {
                $single[] = $f;
            }
        }
        $data = [
            'single' => $single,
            'double' => $double,
        ];
        return response()->json($data);
    }

    public function sellerSponsorId(Request $request)
    {
        $request->validate([
            'seller_referred_id' => ['required', 'exists:sellers'],
        ]);

        $sponsorSellerId = Seller::where('seller_referred_id', $request->post('seller_referred_id'))->pluck('id');

        return response(["status" => 200, "message" => "Sponsor referral Successfully !", "data" => $sponsorSellerId]);
    }

    public function validateEmailSendOtp(Request $request)
    {
        $otpDigits = 6;
        $expiryMinute = 3;

        $request->validate([
            'email' => ['required', 'exists:sellers', 'max:255', new OnlyGmail],
        ]);

        $email = $request->post('email');

        $otp = Otp::digits($otpDigits)->expiry($expiryMinute)->generate($email);

        $otpExpiredTime = Carbon::now()->addMinutes($expiryMinute);

        if ($otp) {

            \App\Models\Otp::updateOrCreate([
                'types' => '0',
                'email' => $email,
            ], [
                'otp' => $otp,
                'expired_at' => $otpExpiredTime,
            ]);

            $mailDetails = [
                'email' => $email,
                'otp' => $otp,
            ];

            $this->dispatch(new SellerOtpEmailJob($mailDetails));

            return response(["status" => 200, "message" => "OTP sent successfully, Please check your mail !", "email" => $email]);
        } else {
            return response(["status" => 422, 'message' => 'Oops something went wrong !']);
        }
    }

    public function verifyEmail(Request $request)
    {
        $request->validate([
            'email' => ['required', 'unique:sellers', 'max:255', new OnlyGmail],
        ]);

        $email = $request->post('email');

        $seller = Seller::where('email', $request->post('registeredEmail'))->update(['email' => $email]);

        if ($seller) {
            return response(["status" => 200, "message" => "Verified and email is updated!"]);
        } else {
            return response(["status" => 422, 'message' => 'Email is already exists !']);
        }
    }

    public function updateSellerBasicDetails(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'pickup_address' => 'required',
        ]);

        $sellerData = $request->all();

        $seller =  Seller::find(auth()->user()->id)
            ->update([
                'first_name' => $sellerData['first_name'],
                'last_name' => $sellerData['last_name'],
                'pickup_address' => $sellerData['pickup_address'],
            ]);

        if ($seller) {
            return response(["status" => 200, "message" => "Verified updated!"]);
        } else {
            return response(["status" => 422, 'message' => 'Something went wrong with update details!']);
        }
    }

    public function updateSellerBankDetails(Request $request)
    {
        $request->validate([
            'bank_name' => 'required',
            'bank_account_number' => 'required',
            'confirm_bank_account_number' => 'required|same:bank_account_number',
            'ifsc_code' => 'required',
            'cancel_cheque' => 'required',
        ]);

        $sellerData = $request->all();

        $filename = null;
        if ($request->file('cancel_cheque')) {
            $filename = ImageCommonHelpers::save($_FILES['cancel_cheque'], 'sellerAccountDetails/sellerCancelCheque');
        }

        $seller = Seller::find(auth()->user()->id)
            ->update([
                'bank_name' => $sellerData['bank_name'],
                'bank_account_number' => $sellerData['bank_account_number'],
                'ifsc_code' => $sellerData['ifsc_code'],
                'cancel_cheque' => $filename,
            ]);

        if ($seller) {
            return response(["status" => 200, "message" => "Bank details updated!"]);
        } else {
            return response(["status" => 422, 'message' => 'Something went wrong with update bank details!']);
        }
    }

    public function updateSellerAvatar(Request $request)
    {
        try {

            $request->validate([
                'seller_profile_avatar' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            ]);
            if ($request->file('seller_profile_avatar')) {
                $imagePath = $request->file('seller_profile_avatar');
                $imageName = "seller_profile_" . $request->authUser . "." . $imagePath->extension();;
                $request->file('seller_profile_avatar')->storeAs('uploads/sellerProfile', $imageName);
                $updateUserAvatar = Seller::where('id', $request->authUser)
                    ->update([
                        'profile_avatar' => $imageName,
                    ]);
            }

            return response(["status" => 200, "message" => "Seller profile updated successfully!"]);
        } catch (Exception $e) {

            return response(["status" => 422, 'message' => 'Something went wrong with update seller profile!']);
        }
    }

    public function changeAccountPassword(SellerAccountPasswordChange $request)
    {
        Seller::find(auth()->user()->id)->update(['password' => Hash::make($request->post('new_password'))]);

        return response(['msg' => 'Account Password has been changed successfully !', 'status' => 200]);
    }
}
