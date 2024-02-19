<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\Admin\ProductsController;

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


Route::prefix('categories')->group(function () {
    Route::match(['get', 'post'], '/', [CategoriesController::class, 'index'])->name('categories');

    Route::get('/create', [CategoriesController::class, 'create'])->name('categories.create');
    
    Route::get('/edit/{id}', [CategoriesController::class, 'edit'])->name('categories.edit');
});

Route::prefix('admin')->group(function () {
    Route::prefix('products')->group(function () {
        Route::get('admin/producs',[ProductsController::class,'index'])->name('admin.products');
     });
});