<?php

use App\Http\Controllers\admin\auth\LoginController;
use App\Http\Controllers\admin\auth\RegistrationController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\SubCategoryController;
use App\Http\Controllers\admin\ChildSubCategoryController;
use App\Http\Controllers\admin\HomeController;
use App\Http\Controllers\admin\ProductApprovalController;
use App\Http\Controllers\admin\SellerController;
use App\Http\Controllers\admin\RolePermissionController;
use App\Http\Controllers\admin\LogisticController;
use App\Http\Controllers\admin\BannerImagesController;
use App\Http\Controllers\admin\MarketingController;
use App\Http\Controllers\admin\PaymentController;
use App\Http\Controllers\admin\ReferralController;
use App\Http\Controllers\admin\SliderImageController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\admin\WalletController;
use App\Http\Controllers\AdminOrderController;
use App\Http\Controllers\SupportController;
use App\Http\Controllers\HsnCodeController;
use Illuminate\Support\Facades\Route;
use App\Models\Category;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::post('upload-products', [ProductController::class, 'uploadProducts'])->name('upload-products');
Route::get('test', function() {
    return view('testfile');
});
Route::get('download-excel-sheet/{id}', [CategoryController::class, 'downloadCategory']);

Route::prefix('admin')->name('admin.')->group(function () {
    Route::middleware(['guest:admin', 'PreventBackHistory'])->group(function () {
        Route::get('register', [RegistrationController::class, 'index'])->name('register');
        Route::get('login', [LoginController::class, 'index'])->name('login');
        Route::post('register', [RegistrationController::class, 'adminRegister'])->name('admin-register');
        Route::post('login', [LoginController::class, 'adminValidate'])->name('admin-login');
    });

    Route::middleware(['auth:admin', 'PreventBackHistory'])->group(function () {
        Route::get('dashboard', [HomeController::class, 'index'])->name('dashboard');
        Route::get('logout', [LoginController::class, 'logout'])->name('logout');

        Route::prefix('category')->name('category.')->group(function () {
            Route::get('/', [CategoryController::class, 'index'])->name('index');
            Route::get('/list', [CategoryController::class, 'list'])->name('list');
            Route::post('main/create', [CategoryController::class, 'store'])->name('store');
            Route::get('edit/{id}', [CategoryController::class, 'edit'])->name('edit');
            Route::post('update/{id}', [CategoryController::class, 'update'])->name('update');
            Route::get('delete/{id}', [CategoryController::class, 'delete'])->name('delete');

            // Route::post('sub/create', [CategoryController::class, 'categorySubCreate'])->name('sub.create');
            // Route::get('create', [CategoryController::class, 'create'])->name('create');
            // Route::get('get-categories', [CategoryController::class, 'getCategories'])->name('getCategories');
            // Route::get('edit/{id}', [CategoryController::class, 'edit'])->name('edit');
            // Route::post('update/{id}', [CategoryController::class, 'update'])->name('update');
            // Route::get('delete/{id}', [CategoryController::class, 'delete'])->name('delete');
            // Route::post('sub1/create', [CategoryController::class, 'categorySub1Create'])->name('sub1.create');
            // Route::get('subcategory', [CategoryController::class, 'subcategory'])->name('subcategory');
            // Route::get('subcategory1', [CategoryController::class, 'subcategory1'])->name('subcategory1');
            // Route::get('tree/{id}', [CategoryController::class, 'tree'])->name('tree');
        });

        Route::prefix('subcategory')->name('subcategory.')->group(function () {
            Route::get('/', [SubCategoryController::class, 'index'])->name('index');
            Route::get('/list', [SubCategoryController::class, 'list'])->name('list');
            Route::post('main/create', [SubCategoryController::class, 'store'])->name('store');
            Route::get('edit/{id}', [SubCategoryController::class, 'edit'])->name('edit');
            Route::post('update/{id}', [SubCategoryController::class, 'update'])->name('update');
            Route::get('delete/{id}', [SubCategoryController::class, 'delete'])->name('delete');
        });

        Route::prefix('childsubcategory')->name('childsubcategory.')->group(function () {
            Route::get('/', [ChildSubCategoryController::class, 'index'])->name('index');
            Route::get('/list', [ChildSubCategoryController::class, 'list'])->name('list');
            Route::post('main/create', [ChildSubCategoryController::class, 'store'])->name('store');
            Route::get('edit/{id}', [ChildSubCategoryController::class, 'edit'])->name('edit');
            Route::post('update/{id}', [ChildSubCategoryController::class, 'update'])->name('update');
            Route::get('delete/{id}', [ChildSubCategoryController::class, 'delete'])->name('delete');
        });

        Route::prefix('banner-image')->name('bannerImage.')->group(function () {
            Route::get('/', [BannerImagesController::class, 'index'])->name('index');
            Route::get('/list', [BannerImagesController::class, 'list'])->name('list');
            Route::post('main/create', [BannerImagesController::class, 'store'])->name('store');
            Route::get('edit/{id}', [BannerImagesController::class, 'edit'])->name('edit');
            Route::post('update/{id}', [BannerImagesController::class, 'update'])->name('update');
            Route::get('delete/{id}', [BannerImagesController::class, 'delete'])->name('delete');
        });

        Route::prefix('hsn')->name('hsn.')->group(function () {
            Route::get('/', [ChildSubCategoryController::class, 'index'])->name('index');
            Route::get('create', [ChildSubCategoryController::class, 'create'])->name('create');
            Route::post('store', [ChildSubCategoryController::class, 'store'])->name('store');
            Route::get('edit/{id}', [ChildSubCategoryController::class, 'edit'])->name('edit');
            Route::post('update/{id}', [ChildSubCategoryController::class, 'update'])->name('update');
            Route::get('delete/{id}', [ChildSubCategoryController::class, 'delete'])->name('delete');
        });

        Route::prefix('hsncode')->name('hsncode.')->group(function () {
            Route::get('/', [HsnCodeController::class, 'index'])->name('index');
            Route::post('store', [HsnCodeController::class, 'store'])->name('store');
            Route::get('edit/{id}', [HsnCodeController::class, 'show'])->name('edit');
            Route::post('update/{id}', [HsnCodeController::class, 'update'])->name('update');
            Route::get('delete/{id}', [HsnCodeController::class, 'destroy'])->name('delete');
        });

        Route::prefix('user')->name('user.')->group(function () {
            Route::get('/', [UserController::class, 'index'])->name('index');
        });

        Route::prefix('marketing')->name('marketing.')->group(function () {
            Route::get('/', [MarketingController::class, 'index'])->name('index');
        });

        Route::prefix('payment')->name('payment.')->group(function () {
            Route::get('/', [PaymentController::class, 'index'])->name('index');
        });

        Route::prefix('wallet')->name('wallet.')->group(function () {
            Route::get('/', [WalletController::class, 'index'])->name('index');
        });

        Route::prefix('referral')->name('referral.')->group(function () {
            Route::get('/', [ReferralController::class, 'index'])->name('index');
        });

        Route::prefix('slider')->name('slider.')->group(function () {
            Route::get('/', [SliderImageController::class, 'index'])->name('index');
            Route::get('/index-ajax', [SliderImageController::class, 'indexAjax'])->name('indexAjax');
            Route::post('store', [SliderImageController::class, 'store'])->name('store');
            Route::post('update', [SliderImageController::class, 'update'])->name('update');
            Route::get('/edit/{id}', [SliderImageController::class, 'edit'])->name('edit');
            Route::get('/delete/{id}', [SliderImageController::class, 'delete'])->name('delete');
        });

        Route::group(['prefix' => 'product_approval', 'as' => 'product_approval.'], function () {
            Route::get('/single_product_listing', [ProductApprovalController::class, 'index'])->name('index');
            Route::get('/bulk_product_approval', [ProductApprovalController::class, 'bulk_product_approval'])->name('bulk_product_approval');
            Route::post('store', [ProductController::class, 'store'])->name('store');
            Route::get('qc_process', [ProductApprovalController::class, 'qcProcess'])->name('qcProcess');
            Route::post('qc_process', [ProductApprovalController::class, 'qcProcessSubmit'])->name('qcProcess.submit');
            Route::get('qc_error', [ProductApprovalController::class, 'qcError'])->name('qcError');
            Route::get('qc_failed', [ProductApprovalController::class, 'qcFailed'])->name('qcFailed');
            Route::get('qc_pass', [ProductApprovalController::class, 'qcPass'])->name('qcPass');
            Route::post('qcPendingToProgress', [ProductApprovalController::class, 'qcPendingToProgress'])->name('qcPendingToProgress');
        });

        Route::group(['prefix' => 'order', 'as' => 'order.'], function () {
            Route::get('/', [AdminOrderController::class, 'index'])->name('index');
        });

        Route::group(['prefix' => 'seller', 'as' => 'seller.'], function () {
            Route::get('list', [SellerController::class, 'list'])->name('list');
            Route::get('approval', [SellerController::class, 'approvedSeller'])->name('approval');
            Route::get('/hold-seller', [SellerController::class, 'holdSeller'])->name('hold-seller');
            Route::get('/un-hold-seller', [SellerController::class, 'unHoldSeller'])->name('un-hold-seller');
            Route::get('render-sellers', [SellerController::class, 'holdSellerAjax'])->name('render_sellers');
            Route::get('states-cities', [SellerController::class, 'statesCities'])->name('states_cities');

            Route::post('/seller-hold', [SellerController::class, 'sellerHold'])->name('seller-hold');
            Route::post('/seller-un-hold', [SellerController::class, 'sellerUnHold'])->name('seller-un-hold');
            Route::post('/account-search', [SellerController::class, 'searchSellerAccounts'])->name('account-search');
            Route::post('/seller-search-bar', [SellerController::class, 'searchBarSellerAccounts'])->name('seller-search-bar');
        });

        Route::group(['prefix' => 'role', 'as' => 'role.'], function () {
            Route::get('/',          [RolePermissionController::class, 'index'])->name('index');
            Route::get('create',     [RolePermissionController::class, 'create'])->name('create');
            Route::post('store',     [RolePermissionController::class, 'store'])->name('store');
            Route::get('edit/{id}',  [RolePermissionController::class, 'edit'])->name('edit');
            Route::post('update',    [RolePermissionController::class, 'update'])->name('update');
            Route::delete('destroy', [RolePermissionController::class, 'destroy'])->name('destroy');

            Route::get('create_permission', [RolePermissionController::class, 'createPermission'])->name('createPermission');
        });
        Route::group(['prefix' => 'support', 'as' => 'support.'], function () {
            Route::get('/',          [SupportController::class, 'admin'])->name('index');
            Route::post('send-message', [SupportController::class, 'sendMessageAdmin'])->name('message.send-message');
            Route::post('seller/info', [SupportController::class, 'SellerInfo'])->name('seller.info');
        });
        Route::group(['prefix' => 'logistic', 'as' => 'logistic.'], function () {
            Route::get('/', [LogisticController::class, 'panding_payment'])->name('panding-payment');
            Route::get('completed-payment', [LogisticController::class, 'completed_payment'])->name('completed-payment');
        });

        // Route::group(['prefix' => 'hsn', 'as' => 'hsn.'], function () {
        //     Route::post('/', [HsnCodeController::class, 'store'])->name('store');
        // });
    });
});
