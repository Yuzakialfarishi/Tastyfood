<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\BeritaController as AdminBeritaController;
use App\Http\Controllers\Admin\GaleriController as AdminGaleriController;
use App\Http\Controllers\Admin\KontakController as AdminKontakController;

// =====================
//   HALAMAN USER UTAMA
// =====================
Route::view('/', 'home')->name('home');
Route::view('/tentang', 'tentang')->name('tentang');
Route::view('/berita', 'berita')->name('berita');
Route::view('/galeri', 'galeri')->name('galeri');
Route::view('/kontak', 'kontak')->name('kontak');

// Form kontak user → simpan pesan
Route::post('/kontak/kirim', [KontakController::class, 'store'])->name('kontak.kirim');

// CRUD untuk user (jika diperlukan)
Route::resource('berita', BeritaController::class)->only(['index', 'show']);
Route::resource('galeri', GaleriController::class)->only(['index']);


// ==================
//     ADMIN AREA
// ==================
Route::prefix('admin')->name('admin.')->group(function () {

    // Dashboard admin
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    // CRUD BERITA ADMIN
    Route::resource('berita', AdminBeritaController::class);

    // CRUD GALERI ADMIN
    Route::resource('galeri', AdminGaleriController::class);

    // Pesan kontak — hanya list + hapus
    Route::get('kontak', [AdminKontakController::class, 'index'])->name('kontak.index');
    Route::delete('kontak/{id}', [AdminKontakController::class, 'destroy'])->name('kontak.destroy');
});
