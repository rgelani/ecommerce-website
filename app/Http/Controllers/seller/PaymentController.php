<?php

namespace App\Http\Controllers\seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function nextPaymentIndex()
    {
        return view('seller.payments.next-payment');
    }

    public function lastPaymentIndex()
    {
        return view('seller.payments.last-payment');
    }

    public function totalOutstandingIndex()
    {
        return view('seller.payments.total-outstanding-payment');
    }
}
