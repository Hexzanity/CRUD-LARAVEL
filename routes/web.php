<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ChartsController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SupplierController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

Route::post('/login', [AuthController::class, 'login']);
Route::get('/charts', function () {
    return view('charts.index');
})->middleware('auth');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// Existing routes
Route::resource('charts', ChartsController::class)->names('charts');
Route::resource('categories', CategoryController::class)->names('categories');
Route::resource('clients', ClientController::class)->names('clients');
Route::resource('orders', OrderController::class)->names('orders');
Route::resource('products', ProductController::class)->names('products');
Route::resource('suppliers', SupplierController::class)->names('suppliers');
