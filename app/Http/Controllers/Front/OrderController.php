<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public $req;

    public function __construct(Request $request) {
        $this->req = $request;
    }

    public function cancellation() {
        return view('front.order.cancellation');
    }

    public function emptyCart() {
        return view('front.order.empty-cart');
    }

    public function form() {
        return view('front.order.form');
    }

    public function minCart() {
        return view('front.order.min-cart');
    }

    public function orderPlaceCancel() {
        return view('front.order.order-palced-cancellation');
    }

    public function orderPlaceNew() {
        return view('front.order.order-placed');
    }

    public function returnOrder() {
        return view('front.order.return-order');
    }

    public function saveForLater() {
        return view('front.order.save-for-later');
    }

    public function orderPlace2() {
        return view('front.order.order-placed-2');
    }

    public function myOrder() {
        return view('front.order.my-order');
    }

}
