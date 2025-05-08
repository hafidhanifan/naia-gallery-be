<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\ProductsController;

Route::middleware('guest')->group(function() {
    Route::get('/',[LoginController::class, 'showLoginPage'])->name('login');
    Route::post('/handle-login', [LoginController::class, 'handleLogin']);
});

Route::middleware('auth:admin')->group(function(){
    Route::get('/dashboard', [DashboardController::class, 'showDashboardPage'])->name('dashboardPage');
    Route::get('/categories', [CategoriesController::class, 'showCategoriesPage'])->name('categoriesPage');
    Route::get('/dress', [ProductsController::class, 'showProductsPage'])->name('productsPage');
    Route::get('/logout', [LoginController::class, 'handleLogout'])->name('logout');

    // Action Handle Category
    Route::post('/categories/add', [CategoriesController::class, 'addCategory'])->name('addCategory');
    Route::post('/categories/edit/{id}', [CategoriesController::class, 'editCategory'])->name('editCategory');
    Route::post('/categories/delete/{id}', [CategoriesController::class, 'deleteCategory'])->name('deleteCategory');
    

    // Action Handle Product
    Route::post('/dress/add', [ProductsController::class, 'addProduct'])->name('addProduct');
});
