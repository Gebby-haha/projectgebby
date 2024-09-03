<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\SliderController;
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
    Route::get('/detail/{id}', [FrontController::class, 'detail'])->name('detail');
    Route::get('kategori/{nama_kategori}', [FrontController::class, 'beritakategori'])->name('beritakategori');


});

// Route::post('/login', [LoginController::class, 'login'])->name('login');
// Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

//akses oleh admin

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
    Route::post('/profile/delete', [ProfileController::class, 'destroy'])->name('profile.delete');

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

    Route::get('sliders', [SliderController::class, 'index'])->name('slider.index');
    Route::get('/uploadslider', [SliderController::class, 'create'])->name('uploadslider.create');
    Route::get('/artikel/uploadslider', [SliderController::class, 'uploadslider'])->name('artikel.uploadslider');
    Route::post('/uploadslider/store', [SliderController::class, 'uploadslider_store'])->name('uploadslider.store');

    Route::put('/uploadslider/{id}/update', [SliderController::class, 'uploadslider_update'])->name('uploadslider.update');
    Route::get('/uploadslider/{id}/edit', [SliderController::class, 'uploadslider_edit'])->name('uploadslider.edit');
    Route::delete('/uploadslider/destroy/{id}', [SliderController::class, 'uploadslider_destroy'])->name('uploadslider.destroy');
});

require __DIR__ . '/auth.php'; // Ensure this file contains any additional auth routes
