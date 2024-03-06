<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Admin\ProductsController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\HomeController;
use Illuminate\Http\Response;
use Illuminate\Mail\Mailables\Content;
use PhpParser\Node\Stmt\Return_;

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

    return view('client.demo-test');
})->name('demo-response');
Route::post('demo-response', function (Request $request) {
    if (!empty($request->username)) {

        return back()->withInput()->with('mess', 'Validate thực hiện không thành công');
    };
    return  redirect(route('demo-response'))->with('mess', 'Validate thực hiện không thành công');
});
Route::get('download-image/{link}', [HomeController::class, 'downloadImg'])->name('downImg');
