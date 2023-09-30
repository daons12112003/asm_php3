<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/test', function () {
    return view('order.bills');
});


// Đăng Ký
Route::match(['GET','POST'], '/register', [App\Http\Controllers\Auth\LoginController::class, 'register'])->name('register');

// // Đăng nhập
Route::match(['GET','POST'], '/login', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login');
// danh sách tài khoản
Route::get('/user', [App\Http\Controllers\UserController::class, 'index'])->name('user_index');
Route::match(['GET','POST'], '/user/update/{id}', [App\Http\Controllers\UserController::class, 'update'])->name('user_update');
Route::match(['GET','POST'], '/user/delete/{id}', [App\Http\Controllers\UserController::class, 'delete'])->name('user_delete');

// đăng xuất
Route::match(['GET','POST'], '/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
// Check quyền
Route::middleware(['auth', 'check.role'])->group(function(){
    Route::get('/phone', [App\Http\Controllers\PhoneController::class, 'index'])->name('route_phone');
    Route::get('/category', [App\Http\Controllers\CategoryController::class, 'index'])->name('route_category');
Route::match(['GET','POST'], '/category/add', [App\Http\Controllers\CategoryController::class, 'add'])->name('route_category_add');
Route::match(['GET','POST'], '/category/edit/{id}', [App\Http\Controllers\CategoryController::class, 'edit'])->name('route_category_edit');
Route::match(['GET','POST'], '/category/delete/{id}', [App\Http\Controllers\CategoryController::class, 'delete'])->name('route_category_delete');


// Sản phẩm
Route::match(['GET','POST'], '/phone/add', [App\Http\Controllers\PhoneController::class, 'add'])->name('route_phone_add');
Route::match(['GET','POST'], '/phone/edit/{id}', [App\Http\Controllers\PhoneController::class, 'edit'])->name('route_phone_edit');
Route::match(['GET','POST'], '/phone/delete/{id}', [App\Http\Controllers\PhoneController::class, 'delete'])->name('route_phone_delete');
// Bannner
Route::get('/banner', [App\Http\Controllers\BannerController::class, 'index'])->name('route_banner');
Route::match(['GET','POST'],'/banner/add', [App\Http\Controllers\BannerController::class, 'add'])->name('route_banner_add');
Route::match(['GET','POST'],'/banner/delete/{id}', [App\Http\Controllers\BannerController::class, 'delete'])->name('route_banner_delete');


});
// //show sản phẩm
Route::get('/index', [App\Http\Controllers\ShowController::class, 'index'])->name('home');

Route::get('/detail', [App\Http\Controllers\ShowController::class, 'detail'])->name('route_detail');
// giỏ hàng
Route::match(['GET','POST'],'/cart', [\App\Http\Controllers\CartController::class, 'index'])->name('cart_index');

Route::match(['GET','POST'],'/add-to-cart', [\App\Http\Controllers\CartController::class, 'add'])->name('cart_add');
Route::match(['GET','POST'],'/cart/delete/{id}', [App\Http\Controllers\CartController::class, 'delete'])->name('delete');
Route::put('/update', [\App\Http\Controllers\CartController::class, 'update'])->name('cart_update');

// Thanh toán
Route::match(['GET','POST'],'/bill', [\App\Http\Controllers\BillsController::class, 'index'])->name('bill_index');
Route::match(['GET','POST'],'/add', [\App\Http\Controllers\BillsController::class, 'add'])->name('bill_add');










