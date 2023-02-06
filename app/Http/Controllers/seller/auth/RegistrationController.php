<?php

namespace App\Http\Controllers\seller\auth;

use App\Helpers\ImageCommonHelpers;
use App\Http\Controllers\Controller;
use App\Http\Requests\SellerAccountRequest;
use App\Models\City;
use App\Models\Country;
use App\Models\Seller;
use App\Models\SellerReferralAccount;
use App\Models\State;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class RegistrationController extends Controller
{
    public function indexGetState()
    {
        $states = State::where('country_id', 101)->pluck('name', 'id');
        return view('seller.auth.register', compact('states'));
    }

    public function getCity(Request $request)
    {
        $cities = City::where('state_id', $request->state_id)->pluck('name', 'id');
        return response()->json($cities);
    }

    public function createSellerAccount(SellerAccountRequest $request)
    {
        $sellerDetails = $request->all();

        $sellerDetails['gst_number'] = $request->post('gst_val');

        $sellerDetails['password'] = Hash::make($sellerDetails['password']);

        $sellerDetails['status'] = '0';

        if ($request->file('pan_certificate')) {
            $filename = ImageCommonHelpers::save($_FILES['pan_certificate'], 'sellerAccountDetails/sellerPanCertificate');
            $sellerDetails['pan_certificate'] = $filename;
        }

        if ($request->file('gst_certificate')) {
            $filename = ImageCommonHelpers::save($_FILES['gst_certificate'], 'sellerAccountDetails/sellerGstCertificate');
            $sellerDetails['gst_certificate'] = $filename;
        }

        if ($request->file('cancel_cheque')) {
            $filename = ImageCommonHelpers::save($_FILES['cancel_cheque'], 'sellerAccountDetails/sellerCancelCheque');
            $sellerDetails['cancel_cheque'] = $filename;
        }

        PREV:
        $sellerID = Str::upper(Str::random(12));

        $sellerReferralIdValidate = Seller::where('seller_referred_id', $sellerID)->first();

        if ($sellerReferralIdValidate) {
            goto PREV;
        } else {

            $sellerDetails['seller_referred_id'] = $sellerID;
            $sellerDetails['country_id'] = 101;

            $sellerAccounts = Seller::create($sellerDetails);
            if ($request->post('seller_sponsor_id')) {
                SellerReferralAccount::create([
                    'seller_id' => $sellerAccounts->id,
                    'referral_seller_id' => $request->post('seller_sponsor_id'),
                ]);
            }
            if ($sellerAccounts) {
                return response(["status" => 200, 'message' => 'Your Seller Account Successfully Created, Waiting for admin approval!']);
            } else {
                return response(["status" => 422, 'message' => 'Oops something went wrong, Please try again later !']);
            }
        }
    }

}
