<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdukController;

Route::get('/', [HomeController::class, 'home']);

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/home', [HomeController::class, 'home']);
Route::get('/produk', [ProdukController::class, 'index']);
Route::get('/produk', [ProdukController::class, 'cari_produk']);
Route::get('/produk/detail/{nama}', [ProdukController::class, 'detail']);
