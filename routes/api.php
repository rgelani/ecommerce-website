<?php

use App\Http\Controllers\seller\api\ApiController;
use App\Http\Controllers\seller\auth\RegistrationController;
use App\Http\Controllers\seller\MarketingController;
use App\Http\Controllers\user\api\MasterController;
use App\Http\Controllers\user\api\LoginController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\SliderImageController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('update-seller-profile', [ApiController::class, 'updateSellerAvatar'])->name('update-seller-profile');
Route::any('generate-otp', [ApiController::class, 'generateOtp'])->name('generate-otp');
Route::post('validate-otp', [ApiController::class, 'validateOtp'])->name('validate-otp');
Route::post('validate-seller-sponsor-id', [ApiController::class, 'sellerSponsorId'])->name('validate-seller-sponsor-id');
Route::post('check-gst-number', [ApiController::class, 'validateGstNumber'])->name('check-gst-number');
Route::post('create-seller-account', [RegistrationController::class, 'createSellerAccount'])->name('create-seller-account');
Route::get('main_category', [ApiController::class, 'mainCategory'])->name('mainCategory');
Route::get('get_2nd_level_childs/{id}', [ApiController::class, 'childCategory'])->name('childCategory');

Route::group(['prefix' => 'marketing', 'as' => 'marketing.'], function () {
    Route::get('/', [MarketingController::class, 'productList'])->name('productList');
});

/* Notification */
Route::group(['prefix' => 'notification', 'as' => 'notification.'], function () {
    /* FCM Token */
    Route::post('fcm-token', [MasterController::class, 'getFCMToken'])->name('fcm');
});

/* Login OTP */
Route::group(['prefix' => 'login', 'as' => 'login.'], function () {
    Route::post('login', [LoginController::class, 'generateOTP'])->name('login');
    Route::post('verify/otp', [LoginController::class, 'verifyOTP'])->name('verify/otp');
});
Route::prefix('slider')->name('slider.')->group(function () {
    Route::get('/getSliderImages', [SliderImageController::class, 'getSliderImages']);
});
