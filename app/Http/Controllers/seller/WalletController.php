<?php

namespace App\Http\Controllers\seller;

use App\Http\Controllers\Controller;
use App\Models\SellerCampaignAmount;
use App\Models\SellerCampaignHistory;
use App\Models\SellerWalletAmount;
use App\Models\SellerWalletHistory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class WalletController extends Controller
{
    public function index()
    {
        $seller = Auth::user();
        $sellerWalletTransactions = SellerWalletHistory::where('seller_id', $seller->id)->orderBy('id', 'desc')->take(10)->get();
        $sellerCampaignHistories = SellerCampaignHistory::where('seller_id', $seller->id)->orderBy('id', 'desc')->take(10)->get();
        $totalWalletBalance = SellerWalletAmount::where('seller_id', $seller->id)->pluck('total_amount')->first();
        return view('seller.wallet.wallet', compact('totalWalletBalance', 'sellerWalletTransactions', 'sellerCampaignHistories'));
    }

    public function addCampaignAmount(Request $request)
    {
        $amount = $request->post('amount');
        if (!$amount || $amount < 1) {
            return response()->json(['error' => ['amount' => 'Amount is required !']]);
        }
        $outstanding = 500;
        $walletBalance = SellerWalletAmount::find(Auth::id());
        $halfAmount = $amount / 2;

        if ($outstanding >= $halfAmount && $walletBalance->total_amount >= $halfAmount) {
            $walletBalance->decrement('total_amount', $halfAmount);
        } else {
            $walletDeductibleAmount = min($walletBalance->total_amount, $outstanding);
            $total = $outstanding + $walletDeductibleAmount;
            if ($total >= $amount) {
                $walletBalance->decrement('total_amount', $walletDeductibleAmount);
            } else {
                return response()->json(['error' => ['amount' => 'Insufficient balance ! you can only add maximum Rs.' . $total . ' amount !']]);
            }
        }

        SellerCampaignHistory::create([
                'seller_id'             => Auth::id(),
                'type'                  => 'credit',
                'amount'                => $amount,
                'email'                 => Auth::user()->email,
                'transaction_type'      => '0',
                'status'                => 1,
            ]);

            SellerCampaignAmount::updateOrCreate([
                'seller_id' => Auth::id()
            ], [
                'total_amount' => DB::raw('total_amount+' . $amount)
            ]);

            return "success";
        }
}
