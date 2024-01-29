<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('login');
});

Route::get('forgot-password', [ForgotPasswordController::class, 'index']);

Route::post('login', [LoginController::class, 'login']);

Route::group([], function () {

    Route::get('admin/dashboard', [DashboardController::class, 'dashboard']);
    Route::get('admin/product', [ProductController::class, 'index']);
});

Route::get('admin/profile', function () {
    return view('admin.profile');
});

Route::get('admin/profile/setting', function () {
    return view('admin.profile_setting');
});
