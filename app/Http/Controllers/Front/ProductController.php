<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Product\ProductsService;
use App\Models\Product;

class ProductController extends Controller
{
    public $req;

    public function __construct(Request $request, ProductsService $productsServices) {
        $this->req = $request;
        $this->productsServices = $productsServices;
    }

    public function mensTopWear() {
        return view('front.product.mens-top-wear');
    }

    public function mensTopWearFilter() {
        $data = $this->productsServices->getProducts($this->req);
        return $data;
    }

    public function mobileMainPage() {
        return view('front.product.mobile_main_page');
    }

    public function singleProduct() {
        return view('front.product.single-product-tshirt');
    }
}
