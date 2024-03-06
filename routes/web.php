<?php

use Illuminate\Support\Facades\Route;
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


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/sanpham', [HomeController::class, 'products'])->name('products');
Route::get('/them-san-pham', [HomeController::class, 'getAdd']);
Route::put('/them-san-pham', [HomeController::class, 'putAdd']);


Route::get('lay-thong-tin', [HomeController::class, 'getArray']);
Route::get('/demo-response', function () {
    $response = response()->view('client.demo-test', [
        'title' => 'Học Http'
    ], 201)->header('Content-Type', 'application/json');
    return  $response;
});
