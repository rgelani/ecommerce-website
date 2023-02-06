<?php

use App\Http\Controllers\seller\api\ApiController;
use App\Http\Controllers\seller\auth\ForgotPasswordController;
use App\Http\Controllers\seller\auth\LoginController;
use App\Http\Controllers\seller\auth\RegistrationController;
use App\Http\Controllers\seller\HomeController;
use App\Http\Controllers\seller\PaymentController;
use App\Http\Controllers\seller\MenuController;
use App\Http\Controllers\seller\CmsPagesController;
use App\Http\Controllers\seller\PackagingController;
use App\Http\Controllers\seller\ProductController;
use App\Http\Controllers\seller\ProfileController;
use App\Http\Controllers\seller\SellerBulkImageUploadController;
use App\Http\Controllers\seller\MarketingController;
use App\Http\Controllers\seller\OrderController;
use App\Http\Controllers\seller\ReferralSystemController;
use App\Http\Controllers\seller\WalletController;
use App\Http\Controllers\seller\WalletRazorpayController;
use App\Http\Controllers\SupportController;
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

Route::get('download-excel-sheet', [ProductController::class, 'downloadCategory'])->name('downloadCategory');
Route::post('upload-bulk-product-sheet', [ProductController::class, 'uploadProducts'])->name('uploadProducts');

Route::prefix('seller')->name('seller.')->group(function () {

    Route::middleware(['guest:seller', 'PreventBackHistory'])->group(function () {
        Route::get('register', [RegistrationController::class, 'indexGetState'])->name('register');
        Route::get('login', [LoginController::class, 'index'])->name('login');
        Route::post('validate-seller-login', [LoginController::class, 'validateSeller'])->name('validate-seller-login');

        //Country State City Routes
        Route::get('get-state', [RegistrationController::class, 'indexGetState'])->name('get-state');
        Route::get('get-city', [RegistrationController::class, 'getCity'])->name('get-city');

        Route::get('seller-forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('seller-forget-password');
        Route::post('send-forgot-password-link', [ForgotPasswordController::class, 'resetPassword'])->name('send-forgot-password-link');
        Route::get('forgot-password/{token}', [ForgotPasswordController::class, 'forgotPasswordValidate']);
        Route::put('update-reset-password', [ForgotPasswordController::class, 'updatePassword'])->name('update-reset-password');
    });

    Route::middleware(['auth:seller', 'PreventBackHistory'])->group(function () {
        Route::get('dashboard', [HomeController::class, 'index'])->name('dashboard');
        Route::get('logout', [LoginController::class, 'logout'])->name('logout');

        // Bulk image upload
        // Route::get('uploaded-preview-images', [SellerBulkImageUploadController::class, 'preloadedImages'])->name('uploaded-preview-images');
        // Route::post('bulk-image-uploader', [SellerBulkImageUploadController::class, 'bulkImageUploader'])->name('bulk-image-uploader');
        // Route::get('bulk-image-upload', [SellerBulkImageUploadController::class, 'index'])->name('bulk-image-upload');
        // Route::post('bulk-image-upload', [SellerBulkImageUploadController::class, 'store'])->name('bulk-image-upload');
        // Route::get('image-url', [SellerBulkImageUploadController::class, 'imageUrl'])->name('image-url');

        //Seller Wallet Module
        Route::get('wallet', [WalletController::class, 'index'])->name('wallet');
        Route::post('razorpay-payment', [WalletRazorpayController::class, 'store'])->name('razorpay-payment');
        Route::post('add-campaign-amount', [WalletController::class, 'addCampaignAmount'])->name('add-campaign-amount');

        Route::group(['prefix' => 'product', 'as' => 'product.'], function () {
            Route::get('/', [ProductController::class, 'product_upload'])->name('product_upload');
            Route::get('/single_product', [ProductController::class, 'index'])->name('index');
            Route::get('/bulk_product', [ProductController::class, 'bluk_product'])->name('bluk_product');
            Route::get('/image_bulk_upload', [ProductController::class, 'image_bulk_upload'])->name('image_bulk_upload');
            Route::get('/subcategory/{id}', [ProductController::class, 'sub_category'])->name('sub_category');
            Route::get('/childsubcategory', [ProductController::class, 'search_child_sub_category'])->name('search_child_sub_category');
            Route::get('/childsubcategory/{id}', [ProductController::class, 'child_sub_category'])->name('child_sub_category');
            Route::get('/hsncode/{id}', [ProductController::class, 'get_hsnlist'])->name('get_hsnlist');
            Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('edit');
            Route::post('store', [ProductController::class, 'store'])->name('store');
            Route::get('list', [ProductController::class, 'view'])->name('view');
            Route::post('product_preview', [ProductController::class, 'productPreview'])->name('preview');
            Route::DELETE('delete/{product}', [ProductController::class, 'delete'])->name('delete');
            Route::get('hsn-code', [ProductController::class, 'hsnCode'])->name('hsn.code');
        });

        // Marketing
        Route::group(['prefix' => 'marketing', 'as' => 'marketing.'], function () {
            Route::get('/', [MarketingController::class, 'index'])->name('index');
            Route::post('manage-campaign', [MarketingController::class, 'manageCampaign'])->name('manage.campaign');
            Route::get('campaign-list',[MarketingController::class,'campaignList'])->name('campaign-list');
            Route::get('campaign-list-ajax',[MarketingController::class,'campaignListAjax'])->name('campaign-list-ajax');
            Route::post('delete-campaign-product',[MarketingController::class,'deleteCampaignProduct'])->name('delete-campaign-product');
            Route::post('manage-campaign-product',[MarketingController::class,'manageCampaignProduct'])->name('manage-campaign-product');
            Route::get('form/{id?}', [MarketingController::class, 'form'])->name('form');
            Route::get('product-list', [MarketingController::class, 'productList'])->name('product-list');
        });

        // Referral System
        Route::group(['prefix' => 'referral', 'as' => 'referral.'], function () {
            Route::get('/', [ReferralSystemController::class, 'index'])->name('index');
            Route::get('/refer/{id}', [ReferralSystemController::class, 'referRegister'])->name('referRegister');
        });

        // Profile
        Route::group(['prefix' => 'profile', 'as' => 'profile.'], function () {
            Route::get('basic/details', [ProfileController::class, 'index'])->name('basic-details');
            Route::get('bank/details', [ProfileController::class, 'bankDetails'])->name('bank-details');
            Route::get('change/password', [ProfileController::class, 'changeAccountPassword'])->name('change-password');
        });

        //support
        Route::group(['prefix' => 'support', 'as' => 'support.'], function () {
            Route::get('/', [SupportController::class, 'seller'])->name('index');
            Route::post('send-message', [SupportController::class, 'sendMessageSeller'])->name('message.send-message');
        });
        Route::get('faq', [HomeController::class, 'faq'])->name('faq');
        Route::get('warehouseCeate', [OrderController::class, 'warehouseCeate'])->name('warehouseCeate');

        //Seller Profile
        Route::post('update-seller-basic-details', [ApiController::class, 'updateSellerBasicDetails'])->name('update-seller-basic-details');
        Route::post('update-seller-bank-details', [ApiController::class, 'updateSellerBankDetails'])->name('update-seller-bank-details');
        Route::post('change-account-password', [ApiController::class, 'changeAccountPassword'])->name('change-account-password');
        Route::post('verify-email-id', [ApiController::class, 'verifyEmail'])->name('verify-email-id');
        Route::post('verify-email-send-otp', [ApiController::class, 'validateEmailSendOtp'])->name('verify-email-send-otp');

        //payment
        Route::group(['prefix' => 'payments', 'as' => 'payments.'], function () {
            Route::get('next/index', [PaymentController::class, 'nextPaymentIndex'])->name('next-payment-index');
            Route::get('last/index', [PaymentController::class, 'lastPaymentIndex'])->name('last-payment-index');
            Route::get('total/outstanding/index', [PaymentController::class, 'totalOutstandingIndex'])->name('total-outstanding-index');
            Route::post('send-message', [PaymentController::class, 'sendMessageSeller'])->name('message.send-message');
        });

        // Packaging
        Route::group(['prefix' => 'packaging', 'as' => 'packaging.'], function () {
            Route::get('index', [PackagingController::class, 'index'])->name('index');
            Route::get('innerpolythene', [PackagingController::class, 'innerpolythene'])->name('innerpolythene');
            Route::get('mainpolythene', [PackagingController::class, 'mainpolythene'])->name('mainpolythene');
            Route::get('safetycover', [PackagingController::class, 'safetycover'])->name('safetycover');
        });

        // order
        Route::group(['prefix' => 'order', 'as' => 'order.'], function () {
            Route::get('/', [OrderController::class, 'newOrder'])->name('newOrder');
            Route::get('pandding_order', [OrderController::class, 'panddingOrder'])->name('panddingOrder');
            Route::get('ready_to_ship', [OrderController::class, 'RedyToShipOrder'])->name('RedyToShipOrder');
            Route::get('in_process', [OrderController::class, 'inProcessOrder'])->name('inProcessOrder');
            Route::get('shipping_order', [OrderController::class, 'shippedOrder'])->name('shippedOrder');
            Route::get('delivery_order', [OrderController::class, 'diveredOrder'])->name('diveredOrder');
            Route::get('cancel_order', [OrderController::class, 'cancelOrder'])->name('cancelOrder');
            Route::get('return_order', [OrderController::class, 'returnOrder'])->name('returnOrder');
            Route::post('accept', [OrderController::class, 'accept'])->name('accept');
            Route::post('unaccepted', [OrderController::class, 'unaccepted'])->name('unaccepted');
            Route::post('pickup-request', [OrderController::class, 'pickupRequest'])->name('pickup.request');
            Route::group(['prefix' => 'manifest', 'as' => 'manifest.'], function () {
                Route::get('single/{id}', [OrderController::class, 'manifestSingle'])->name('single');
            });
            Route::group(['prefix' => 'lebal_invoice', 'as' => 'lebal_invoice.'], function () {
                Route::get('single/{id}', [OrderController::class, 'lebalInvoice'])->name('single');
            });
        });

        // Menu
        Route::controller(MenuController::class)->group(function(){
            Route::get('menu', 'index')->name('menu');
            Route::get('/menu/create', 'create')->name('menu_create');
            Route::post('/menu/store', 'store')->name('menu_store');
            Route::get('/menu/edit/{id}', 'edit')->name('menu_edit');
            Route::post('/menu/update', 'update')->name('menu_update');
            Route::get('/menu/delete/{id}', 'delete')->name('menu_delete');
            Route::post('/menu/publish', 'publish')->name('menu_publish');
        });
        // CMSPages
        Route::controller(CmsPagesController::class)->group(function(){
            Route::get('cmspages', 'index')->name('cmspages');
            Route::get('/cmspages/create', 'create')->name('cmspages_create');
            Route::post('/cmspages/store', 'store')->name('cmspages_store');
            Route::get('/cmspages/edit/{id}', 'edit')->name('cmspages_edit');
            Route::post('/cmspages/update', 'update')->name('cmspages_update');
            Route::get('/cmspages/delete/{id}', 'delete')->name('cmspages_delete');
            Route::post('/cmspages/publish', 'publish')->name('cmspages_publish');
        });
    });
});