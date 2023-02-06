<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SliderImage;
use App\Models\Category;
use App\Models\BannerImage;

class HomeController extends Controller
{

    public $req;

    public function __construct(Request $request) {
        $this->req = $request;
    }

    public function home() {
        $sliderImages = SliderImage::all();
        $categories = Category::with(['subCategory' => function($q1) {
            $q1->with('childSubCategory');
        }])->get();
        $bannerImages = BannerImage::get()->groupBy('type');
        return view('front.home', compact('sliderImages', 'categories', 'bannerImages'));
    }
}
