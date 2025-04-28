<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KeunggulanController;

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

// Route untuk Halaman Utama dan Beranda
Route::get('/', [KeunggulanController::class, 'index']);
Route::get('/beranda', [KeunggulanController::class, 'index']);

// Route halaman lainnya
Route::get('/kontak', function () {
    return view('kontak');
});

Route::get('/tentang', function () {
    return view('tentang');
});
