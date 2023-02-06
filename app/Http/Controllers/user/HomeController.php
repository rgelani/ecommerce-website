<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\SliderImage;
use App\Models\Category;
use App\Helpers\api;
use App\Models\Product;
use Illuminate\Support\Facades\Config;

class HomeController extends Controller
{
    /* ------------------------ Using Custom API Helper ------------------------ */
    public function index()
    {
        $categories = API::get(Config::get('constants.general.API_URL').'category/categories');
        $sliderImages = SliderImage::all();
        // $products = Product::with('productImage')->first();
        $products = Product::with('productImage')->find("907e00c0-821d-11ed-987a-77cda27e5e7d");
        // $categories = Category::with('child')->get();
        return view('user.home', compact('sliderImages', 'categories', 'products'));
    }

    // public function index()
    // {
    //     $sliderImages = SliderImage::all();
    //     $categories = Category::with('child')->get();
    //     return view('user.home', compact('sliderImages', 'categories'));
    // }

    public function webHookCallBack(Request $request)
    {
        Log::info($request);
        Log::info('wbe hook call success');
    }
}
