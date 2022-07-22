<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\ListController;
use App\Http\Controllers\User\ProductController;
use App\Http\Controllers\User\DaftarController;
use App\Http\Controllers\User\LoginController;
use App\Http\Controllers\User\AddToBagController;
use App\Http\Controllers\User\CartController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\RajaongkirController;
use App\Http\Controllers\User\OrderController;
use Illuminate\Http\Request;
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

Route::get('/', [HomeController::class, 'index'])->name('user.home');

Route::get('/product/{slug}', [ProductController::class, 'index'])->name('user.product.show');

Route::POST('/add', [AddToBagController::class, 'index'])->name('user.product.add');


Route::get('/products', function () {
    return view('web.user.sections.products');
})->name('user.products');

// dev
Route::middleware(['guest'])->group(function () {
    Route::get('/login', [LoginController::class, 'index'])->name('user.login');
    Route::post('/login', [LoginController::class, 'login'])->name('user.login.validasi');
    Route::get('/daftar', [DaftarController::class, 'index'])->name('user.daftar');
    Route::post('/daftar', [DaftarController::class, 'validasi'])->name('user.daftar.validasi');
});

Route::middleware(['auth'])->group(function () {
    Route::post('/logout', [LoginController::class, 'logout'])->name('user.logout');
});



Route::middleware(['auth'])->group(function () {
    Route::get('/account', function () {
        return view('web.user.sections.account');
    })->name('user.account');
    Route::get('/address', [UserController::class, 'address'])->name('user.address');
    Route::post('/address/change', [UserController::class, 'changeAddress'])->name('user.address.change');
    Route::delete('/address/remove', [UserController::class, 'hapusAlamat'])->name('user.address.remove');
    Route::post('/add/address', [UserController::class, 'addAddress'])->name('user.address.add');


    Route::get('/orders', [OrderController::class, 'index'])->name('user.orders');

    Route::get('/order-details/{kode_transaksi}', [OrderController::class, 'show'] )->name('user.order_details');

    Route::get('/cart', [CartController::class, 'index'])->name('user.cart_detail');
    Route::post('/product/remove', [CartController::class, 'removeProduk'])->name('user.product.remove');

});


Route::middleware(['auth'])->group(function(){
    Route::get('user/rajaongkir/get_provinsi/', [RajaongkirController::class, 'get_provinsi'])->name('address.get.provinsi');
    Route::get('user/rajaongkir/get_kabupaten/{id}', [RajaongkirController::class, 'get_kabupaten'])->name('address.get.kabupaten');
    Route::get('user/rajaongkir/get_kecamatan/{id}', [RajaongkirController::class, 'get_kecamatan'])->name('address.get.kecamatan');


});






Route::get('/list/{category}', [ListController::class, 'index'])->name('user.list');


Route::get('/admin/dashboard', function () {
    return view('web.admin.sections.dashboard');
})->name('dashboard');

Route::get('/admin/login', function () {
    return view('web.admin.login');
});
