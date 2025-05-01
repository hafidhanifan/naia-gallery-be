<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/products', [ProductsController::class, 'index'])->name('products');
// Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
// });
