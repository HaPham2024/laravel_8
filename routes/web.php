<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

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
// client route

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/sanpham', [HomeController::class, 'products'])->name('product');
Route::get('/them-san-pham', [HomeController::class, 'getAdd']);
Route::post('/them-san-pham', [HomeController::class, 'postAdd'])->name('post-add');
Route::put('/them-san-pham', [HomeController::class, 'putAdd']);


Route::get('lay-thong-tin', [HomeController::class, 'getArray']);
Route::get('/demo-response', function () {

    return view('client.demo-test');
})->name('demo-response');
Route::post('demo-response', function (Request $request) {
    if (!empty($request->username)) {

        return back()->withInput()->with('mess', 'validate không thành công');
    };
    return  redirect(route('demo-response'))->with('mess', 'validate không thành công');
});
Route::get('download-image/{link}', [HomeController::class, 'downloadImg'])->name('downImg');

Route::prefix('/users')->name('users.')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('index');
    Route::get('/add', [UserController::class, 'add'])->name('add');
    Route::post('/add', [UserController::class, 'postAdd'])->name('post-add');
    Route::get('/edit/{id}', [UserController::class, 'getEdit'])->name('edit');
    Route::post('/update', [UserController::class, 'postEdit'])->name('post-edit');
});
