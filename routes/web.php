<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\KategoriController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

//akses oleh public
Route::middleware(['web'])->group(function () {

    // Route::get('/', function () {
    //     return view('welcome');
    // });
    Route::get('/', [FrontController::class, 'index'])->name('beranda');

});


//akses oleh admin

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    // Article and Category Management Routes
    Route::get('/artikel/create', [DashboardController::class, 'create'])->name('artikel.create');
    Route::get('/artikel/kategori', [DashboardController::class, 'kategori'])->name('artikel.kategori');
    Route::post('/kategori/store', [DashboardController::class, 'kategori_store'])->name('kategori.store');

    Route::get('/artikel/buatartikel', [BeritaController::class, 'buatartikel'])->name('artikel.buatartikel');
    Route::post('/buatartikel/store', [BeritaController::class, 'buatartikel_store'])->name('buatartikel.store');

    Route::put('/kategori/{id}/update', [KategoriController::class, 'kategori_update'])->name('kategoriupdate');
    Route::get('/kategori/{id}/edit', [KategoriController::class, 'kategori_edit'])->name('kategoriedit');
    Route::delete('/kategori/destroy/{id}', [KategoriController::class, 'kategori_destroy'])->name('kategori.destroy');

    Route::put('/buatartikel/{id}/update', [BeritaController::class, 'buatartikel_update'])->name('buatartikel.update');
    Route::get('/buatartikel/{id}/edit', [BeritaController::class, 'buatartikel_edit'])->name('buatartikel.edit');
    Route::delete('/buatartikel/destroy/{id}', [BeritaController::class, 'buatartikel_destroy'])->name('buatartikel.destroy');
});

require __DIR__.'/auth.php'; // Ensure this file contains any additional auth routes
