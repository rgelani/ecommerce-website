<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\AuthController;
use App\Http\Controllers\Front\ProductController;
use App\Http\Controllers\Front\UserController;
use App\Http\Controllers\Front\OrderController;
use App\Http\Controllers\Front\OfferController;


/*
|--------------------------------------------------------------------------
| Front Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('/front')->group(function() {
    Route::get('/login', [AuthController::class, 'loginForm']);

    Route::get('/home', [HomeController::class, 'home']);

    // user details
    Route::get('/about', [UserController::class, 'about']);
    Route::get('/all-mobile', [UserController::class, 'allMobile']);
    Route::get('/email-address', [UserController::class, 'emailAddressForm']);
    Route::get('/email', [UserController::class, 'emailForm']);
    Route::get('/pin', [UserController::class, 'pin']);
    Route::get('/profile', [UserController::class, 'profile']);
    Route::get('/phone-number', [UserController::class, 'phoneNumber']);
    Route::get('/reffrl', [UserController::class, 'reffrl']);

    // order details
    Route::get('/cancellation', [OrderController::class, 'cancellation']);
    Route::get('/empty-cart', [OrderController::class, 'emptyCart']);
    Route::get('/form', [OrderController::class, 'form']);
    Route::get('/min-cart', [OrderController::class, 'minCart']);
    Route::get('/order-place-cancel', [OrderController::class, 'orderPlaceCancel']);
    Route::get('/order-place-new', [OrderController::class, 'orderPlaceNew']);
    Route::get('/return-order', [OrderController::class, 'returnOrder']);
    Route::get('/save-for-later', [OrderController::class, 'saveForLater']);
    Route::get('/order-place', [OrderController::class, 'orderPlace2']);
    Route::get('/my-order', [OrderController::class, 'myOrder']);


    // offer details
    Route::get('/deals-of-the-day', [OfferController::class, 'dealsOfTheDay']);
    Route::get('/top-deals', [OfferController::class, 'topDeals']);
    Route::get('/top-offers', [OfferController::class, 'topOffers']);

    // product details
    Route::get('/mens-top-wear', [ProductController::class, 'mensTopWear'])->name('mens-top-wear');
    Route::post('/filter-mens-top-wear', [ProductController::class, 'mensTopWearFilter'])->name('filter-mens-top-wear');
    
    Route::get('/mobile-main-page', [ProductController::class, 'mobileMainPage']);
    Route::get('/single-product', [ProductController::class, 'singleProduct']);
});

