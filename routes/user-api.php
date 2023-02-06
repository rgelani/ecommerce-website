<?php

use App\Http\Controllers\user\api\ApiController;
use App\Http\Controllers\user\auth\LoginController;
use App\Http\Controllers\user\auth\RegistrationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::post('validate/user/email', [RegistrationController::class, 'validateUserEmail'])->name('validate-user-email');
Route::post('send/user/otp', [RegistrationController::class, 'sendUserOtp'])->name('send-user-otp');
Route::post('validate/user/otp', [RegistrationController::class, 'validateUserOtp'])->name('validate-user-otp');
Route::post('registered/new/user', [RegistrationController::class, 'registeredNewUser'])->name('registered-new-user');

