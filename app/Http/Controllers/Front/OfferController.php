<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    public $req;

    public function __construct(Request $request) {
        $this->req = $request;
    }

    public function dealsOfTheDay() {
        return view('front.offers.deal-of-the-day');
    }

    public function topDeals() {
        return view('front.offers.top-deals-on-fashion');
    }

    public function topOffers() {
        return view('front.offers.top-offers');
    }
}
