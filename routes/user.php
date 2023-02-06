<?php

use App\Http\Controllers\user\auth\LoginController;
use App\Http\Controllers\user\CheckoutController;
use App\Http\Controllers\user\HomeController;
use App\Http\Controllers\user\OrderController;
use App\Http\Controllers\user\ProductController;
use App\Http\Controllers\user\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Seller Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('webhook-call-back', [HomeController::class, 'webHookCallBack'])->name('webhook-call-back');


Route::get('/', [HomeController::class, 'index'])->name('dashboard');

Route::get('/product_detail/{id}', [ProductController::class, 'product_view'])->name('product_view');
Route::get('/add_to_cart/{productid}', [CheckoutController::class, 'add_to_cart'])->name('add_to_cart');
Route::get('/my_cart', [CheckoutController::class, 'my_cart'])->name('my_cart');
Route::get('/place_order', [CheckoutController::class, 'placeOrder'])->name('placeOrder');
Route::get('/remove_from_cart/{productid}', [CheckoutController::class, 'remove_from_cart'])->name('remove_from_cart');
Route::get('/remove_quantity/{productid}', [CheckoutController::class, 'remove_quantity'])->name('remove_quantity');
Route::get('/add_quantity/{productid}', [CheckoutController::class, 'add_quantity'])->name('add_quantity');

Route::middleware(['guest:user', 'PreventBackHistory'])->group(function () {
    //    Route::get('register', [RegistrationController::class, 'index'])->name('register');
    Route::get('login', [LoginController::class, 'index'])->name('login');
    Route::post('login/user', [LoginController::class, 'loginUser'])->name('login-user');
});

Route::get('my/profile', [ProfileController::class, 'index'])->name('my-profile');

Route::middleware(['auth:user', 'PreventBackHistory'])->group(function () {
    Route::get('logout', [LoginController::class, 'logout'])->name('logout');
    Route::post('checkout/pincode-get/', [CheckoutController::class, 'pincodeDataGet'])->name('pincodeDataGet');

    Route::get('my-cart', [CheckoutController::class, 'myCart']);
    Route::get('checkout/', [CheckoutController::class, 'checkout']);
    Route::get('checkout/shipping-charge', [CheckoutController::class, 'shippingCharge']);
    Route::get('order/creation/management', [CheckoutController::class, 'orderCretionManagement']);
    Route::get('order/invoice/estimate', [CheckoutController::class, 'invoiceEstimate']);
    Route::get('seller/clientWareHouse/create', [CheckoutController::class, 'clientWareHouse']);
    Route::get('order/packing-slip', [CheckoutController::class, 'packingSlip']);
    Route::get('image', [CheckoutController::class, 'image']);
    Route::get('order/pickup-request', [CheckoutController::class, 'pickupRequest']);

    Route::get('order-shippping-address-create', [OrderController::class, 'ShipppingAddressCreate']);
    Route::get('set-gst', [OrderController::class, 'useGst']);
    Route::get('order-email-confirmation', [OrderController::class, 'orderEmailConfirmation']);
    Route::get('order-create', [OrderController::class, 'orderCreate'])->name('order-create');
    Route::get('create-pdf-file', [OrderController::class, 'index']);

    Route::get('checkout', [CheckoutController::class, 'checkoutPage']);
    Route::get('order-page', [OrderController::class, 'orderPage'])->name('order-page');
    Route::post('address-save', [OrderController::class, 'addressSave'])->name('address-save');
});
    Route::get('products/{slug}', [ProductController::class, 'products_list'])->name('products/{slug}');