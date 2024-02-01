<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MainCategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SizeController;
use App\Http\Controllers\SubCategoryController;
use App\Models\MainCategory;
use App\Models\SubCategory;
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

Route::get('/', [LoginController::class, 'index'])->name('login');

Route::get('forgot-password', [ForgotPasswordController::class, 'index']);

Route::post('login', [LoginController::class, 'login']);



Route::group(['middleware' => 'auth'], function () {

    Route::get('admin/dashboard', [DashboardController::class, 'dashboard']);

    Route::get('admin/products', [ProductController::class, 'index']);

    Route::get('admin/category/main-category', [MainCategoryController::class, 'index']);
    Route::post('admin/category/main-category', [MainCategoryController::class, 'store']);
    Route::get('admin/category/main-category/delete/{id}', [MainCategoryController::class, 'destroy']);
    Route::get('admin/category/main-category/edit/{slug}', [MainCategoryController::class, 'edit']);
    Route::post('admin/category/main-category/update', [MainCategoryController::class, 'update']);

    Route::get('admin/category/sub-category', [SubCategoryController::class, 'index']);
    Route::post('admin/category/sub-category', [SubCategoryController::class, 'store']);
    Route::get('admin/category/sub-category/edit/{slug}', [SubCategoryController::class, 'edit']);
    Route::post('admin/category/sub-category/update',[SubCategoryController::class, 'update']);
    Route::get('admin/category/sub-category/delete/{id}',[SubCategoryController::class,'destroy']);

    Route::get('admin/property/size', [SizeController::class, 'index']);
});

Route::get('admin/profile', function () {
    return view('admin.profile');
});

Route::get('admin/profile/setting', function () {
    return view('admin.profile_setting');
});
