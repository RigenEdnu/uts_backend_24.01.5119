<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdukController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/', [HomeController::class, 'home']);
Route::get('/home', [HomeController::class, 'home']);
Route::get('/produk', [ProdukController::class, 'cari_produk']);
Route::get('/produk/detail/{nama}', [ProdukController::class, 'detail']);

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/admin', function () {
    return view('dashboard.admin');
})->middleware('role:admin');

Route::get('/user', function () {
    return view('dashboard.user');
})->middleware('role:user');

Route::prefix('admin')->name('admin.')->middleware('role:admin')->group(function () {
    Route::resource('products', ProdukController::class)->except(['show']);
});

require __DIR__.'/auth.php';
