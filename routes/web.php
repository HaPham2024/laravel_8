<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\Admin\ProductsController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class ,'index'])->name('home');

Route::prefix('categories')->group(function () {
    Route::match(['get', 'post'], '/', [CategoriesController::class, 'index'])->name('categories');
    Route::get('/create', [CategoriesController::class, 'create'])->name('categories.create');
    Route::get('/edit/{id}', [CategoriesController::class, 'edit'])->name('categories.edit');
});

Route::middleware('auth.admin')->prefix('admin')->group(function () {
    Route::get('/', [DashboardController::class, 'index']);
    Route::resource('products', ProductsController::class)->middleware('auth.admin.product');
});



Route::get('san-pham/{id}',[HomeController::class, 'getProductDetail']);