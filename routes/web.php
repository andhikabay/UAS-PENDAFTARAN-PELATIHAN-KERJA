<?php

use App\Http\Controllers\PesertaController;
use App\Http\Controllers\PelatihanController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::resource('peserta', PesertaController::class)->parameters([
        'peserta' => 'peserta'
    ]);
    Route::resource('pelatihan', PelatihanController::class);
    Route::resource('pendaftaran', PendaftaranController::class);
});

// ✅ tambahkan ini untuk login/register/logout
require __DIR__.'/auth.php';
