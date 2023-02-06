<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\user\OrderController;
use App\Http\Controllers\user\CheckoutController;
// use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// User Routes
Route::middleware(['guest:web', 'PreventBackHistory'])->group(function () {
});

Route::middleware(['auth:web', 'PreventBackHistory'])->group(function () {
});

Route::any('category_dropdown', 'App\Http\Controllers\Webcontroller@single_product');
// pooja
// pooja first commit



Route::get('/', function () {
    return view('welcome');
});

// Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

// Auth::routes();

Route::get('conversation/{userId}', [MessageController::class, 'conversation'])
    ->name('message.conversation');
Route::post('send-message', [MessageController::class, 'sendMessage'])
    ->name('message.send-message');

Route::post('send-group-message', [MessageController::class, 'sendGroupMessage'])
    ->name('message.send-group-message');

Route::resource('message-groups', 'MessageGroupController');