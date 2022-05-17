<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('web.user.sections.home');
})->name('user.home');

Route::get('/product/{slug}', function () {
    return view('web.user.sections.detail-product');
})->name('user.product.show');

Route::get('/products', function () {
    return view('web.user.sections.products');
})->name('user.products');

// dev
Route::get('/login', function () {
    return view('web.user.sections.login');
})->name('user.login');

Route::get('/daftar', function () {
    return view('web.user.sections.daftar');
})->name('user.daftar');

Route::get('/account', function () {
    return view('web.user.sections.account');
});

Route::get('/address', function () {
    return view('web.user.sections.address');
});
