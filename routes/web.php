<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductsController;

Route::middleware('guest')->group(function() {
    Route::get('/',[LoginController::class, 'showLoginPage'])->name('login');
    Route::post('/', [LoginController::class, 'login']);
});

Route::middleware('auth')->group(function(){
    Route::get('/dashborad', [DashboardController::class, 'showDashboardPage'])->name('dashboardPage');
    Route::get('/products', [ProductsController::class, 'showProductsPage'])->name('productsPage');
});
// Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
// });
