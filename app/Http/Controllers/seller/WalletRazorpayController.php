<?php

namespace App\Http\Controllers\seller;

use App\Http\Controllers\Controller;
use App\Models\SellerCampaignAmount;
use App\Models\SellerCampaignHistory;
use App\Models\SellerWalletAmount;
use App\Models\SellerWalletHistory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use PHPUnit\Util\Exception;
use Razorpay\Api\Api;

class WalletRazorpayController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function store(Request $request)
    {
        $sellerAuth = Auth::user();

        $input = $request->all();

        $api = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));

        $payment = $api->payment->fetch($input['razorpay_payment_id']);

        if (count($input) && !empty($input['razorpay_payment_id'])) {
            try {
                $response = $api->payment->fetch($input['razorpay_payment_id'])->capture(['amount' => $payment['amount']]);

                $payableAmount = $response['amount'] / 100;

                $array = [
                    'seller_id' => $sellerAuth->id,
                    'type' => 'credit',
                    'razorpay_payment_id' => $response['id'],
                    'amount' => $payableAmount,
                    'currency' => $response['currency'] ?? null,
                    'method' => $response['method'] ?? null,
                    'description' => $request->post('description'),
                    'transaction_type' => '1',
                    'status' => 1,
                    'email' => $response['email'] ?? null,
                    'contact' => $response['contact'] ?? null,
                    'card_id' => $response['card_id'] ?? null,
                    'name' => $response['card']['name'] ?? null,
                    'last4' => $response['card']['last4'] ?? null,
                    'network' => $response['card']['network'] ?? null,
                    'issuer' => $response['card']['issuer'] ?? null,
                ];

                SellerCampaignHistory::create($array);

                $sellerCampaignTotalBalance = SellerCampaignAmount::where('seller_id', $sellerAuth->id)->first();

                if ($sellerCampaignTotalBalance) {
                    $sellerCampaignTotalBalance->update(['total_amount' => $sellerCampaignTotalBalance->total_amount + $payableAmount]);
                } else {
                    SellerCampaignAmount::create([
                        'seller_id' => $sellerAuth->id,
                        'total_amount' => $payableAmount,
                    ]);
                }

            } catch (Exception $e) {
                return $e->getMessage();
                return response(['msg' => $e->getMessage(), 'status' => 422]);
            }
        }

        return response(['message' => 'Payment successful', 'status' => 200]);
    }}
