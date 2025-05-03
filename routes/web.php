<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductsController;

Route::middleware('guest')->group(function() {
    Route::get('/',[LoginController::class, 'showLoginPage'])->name('login');
    Route::post('/handle-login', [LoginController::class, 'handleLogin']);
});

Route::middleware('auth:admin')->group(function(){
    Route::get('/dashboard', [DashboardController::class, 'showDashboardPage'])->name('dashboardPage');
    Route::get('/products', [ProductsController::class, 'showProductsPage'])->name('productsPage');
    Route::get('/logout', [LoginController::class, 'handleLogout'])->name('logout');

    // Action Handle
    Route::post('/add-product', [ProductsController::class, 'addProduct'])->name('addProduct');
});
