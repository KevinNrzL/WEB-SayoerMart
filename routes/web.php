<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

// shop
Route::get('/shop', function () {
    return view('shop');
});


Route::get('/admin', function () {
    return view('admin.login');
});

Route::get('/dbadmin', function () {
    return view('admin.dashboard');
});

Route::get('/data', function () {
    return view('admin.tableproduk');
});

Route::get('/pesanan', function () {
    return view('admin.tablepesanan');
});


// login 
Route::post('/postlogin', [App\Http\Controllers\LoginController::class, 'postlogin'])->name('postlogin');
// logout 
Route::get('/logout', [App\Http\Controllers\LoginController::class, 'logout'])->name('logout');

Route::post('/produk', [App\Http\Controllers\ProdukController::class, 'store'])->name('store');
Route::get('/data', [App\Http\Controllers\ProdukController::class, 'index'])->name('index');
Route::get('/shop', [App\Http\Controllers\ProdukController::class, 'index2'])->name('index2');

// hapus data
Route::get('/destroy/{id}', [App\Http\Controllers\ProdukController::class, 'destroy'])->name('destroy');

// edit data
Route::post('/update/{id}', [App\Http\Controllers\ProdukController::class, 'update'])->name('update');