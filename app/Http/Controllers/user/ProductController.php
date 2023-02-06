<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Helpers\api;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Log;

class ProductController extends Controller
{
    public function product_view ($id) {
        $product = Product::with(['productImage', 'seller', 'variants'])->find($id);
        $similar_products = Product::with('productImage')->where(['child_sub_category_id' => $product->child_sub_category_id, "deleted_at" => null])->where('id' ,"<>", $product->id)->get();
        $size = [];
        foreach ($product->variants as $key => $value) {
            if(!empty($value->size)){
                array_push($size, $value->size);
            }
        }
        return view('user.order.single-product', compact('product', 'size', 'similar_products'));
    }    
    /* ------------------------ Using Custom API Helper ------------------------ */
    public function products_list(Request $request,$slug){
        echo 'dfgdfgdfgdfg'.'&nbsp;'.$slug  ;exit;
        // $slug = Request::segment(1);
        $categories = API::get(Config::get('constants.general.API_URL').'category/categories');
        $sliderImages = SliderImage::all();
        return view('user.home', compact('sliderImages', 'categories'));
    }
}
