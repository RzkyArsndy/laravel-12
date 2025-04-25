<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PemeriksaanUmumController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\SekolahController;
use App\Http\Controllers\MataController;
use App\Http\Controllers\GiziController;
use App\Http\Controllers\PemeriksaanGigiController;
use App\Http\Controllers\KuesionerController;





Route::middleware('auth')->group(function () {
    Route::get('/pemeriksaanumum', function () {
        return view('pemeriksaanumum.index');
    })->name('pemeriksaanumum.index');

    Route::get('/pg', function () {
        return view('petugasgizi.index');
    })->name('pg.index');

    Route::get('/pm', function () {
        return view('petugasmata.index');
    })->name('pm.index');

    Route::get('/pgm', function () {
        return view('petugasgigi.index');
    })->name('pgm.index');

    Route::get('/id', function () {
        return view('identitasdiri.index');
    })->name('id.index');

    Route::get('/Kuesioner', function () {
        return view('datakuisioner.index');
    })->name('dk.index');

    Route::resource('/ab', ProductController::class);

    Route::get('/app', function () {
        return view('appgallery.index');
    })->name('app.index');

    Route::get('/datasiswa', function () {
        return view('datasiswa.index');
    })->name('datasiswa.index');

    Route::middleware('auth')->group(function () {
        // Your existing routes...

        // New direct route to products.index view
        Route::get('/products-view', function () {
            // Fetch products to avoid undefined variable
            return view('products.index');
        })->name('products.view');

        Route::resource('/products', ProductController::class);
        // Rest of your routes...
    });

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth'])->name('dashboard');



    Route::get('/siswa/{id}/edit', [SiswaController::class, 'edit'])->name('siswa.edit');
    Route::put('/siswa/{id}', [SiswaController::class, 'update'])->name('siswa.update');

    Route::post('/mata/store', [MataController::class, 'store'])->name('mata.store');

    Route::post('/gizi/store', [GiziController::class, 'store'])->name('gizi.store');

    Route::get('/pemeriksaan-gigi', [PemeriksaanGigiController::class, 'create'])->name('pemeriksaan-gigi.create');
    Route::post('/pemeriksaan-gigi', [PemeriksaanGigiController::class, 'store'])->name('pemeriksaan-gigi.store');

    Route::get('/kuesioner', [KuesionerController::class, 'index'])->name('kuesioner.index');
    Route::post('/kuesioner', [KuesionerController::class, 'store'])->name('kuesioner.store');

    Route::get('/datasiswa', [SiswaController::class, 'index'])->name('datasiswa.index');
    Route::match(['get', 'post'], '/siswa', [SiswaController::class, 'index'])->name('siswa.index');
    Route::get('/pemeriksaanumum', [PemeriksaanUmumController::class, 'index'])->name('pemeriksaanumum.index');
    Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');
    Route::post('/siswa', [SiswaController::class, 'store'])->name('siswa.store');
    Route::get('/id', [App\Http\Controllers\SekolahController::class, 'index'])->name('id.index');
    Route::post('/pemeriksaan-umum', [PemeriksaanUmumController::class, 'store'])->name('pemeriksaan-umum.store');
    Route::resource('/products', ProductController::class);
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__ . '/auth.php';
