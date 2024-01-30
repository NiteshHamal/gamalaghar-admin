<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MainCategoryController;
use App\Http\Controllers\ProductController;
use App\Models\MainCategory;
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

Route::get('/',[LoginController::class,'index'])->name('login');

Route::get('forgot-password', [ForgotPasswordController::class, 'index']);

Route::post('login', [LoginController::class, 'login']);



Route::group(['middleware'=>'auth'], function () {

    Route::get('admin/dashboard', [DashboardController::class, 'dashboard']);
    Route::get('admin/products', [ProductController::class, 'index']);
    Route::get('admin/category/main',[MainCategoryController::class, 'index']);
    Route::post('admin/main-category/add',[MainCategoryController::class,'store']);



    
});

Route::get('admin/profile', function () {
    return view('admin.profile');
});

Route::get('admin/profile/setting', function () {
    return view('admin.profile_setting');
});