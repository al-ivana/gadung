<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\PendaftaranController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/beranda');

Route::get('/beranda', [PageController::class, 'beranda'])->name('beranda');
Route::get('/menu-game', [PageController::class, 'menuGame'])->name('menugame');
Route::get('/profil', [PageController::class, 'profil'])->name('profil');

Route::get('/pendaftaran', [PendaftaranController::class, 'index'])->name('pendaftaran.index');
Route::get('/pendaftaran/create', [PendaftaranController::class, 'create'])->name('pendaftaran.create');
Route::post('/pendaftaran', [PendaftaranController::class, 'store'])->name('pendaftaran.store');
Route::get('/pendaftaran/{pendaftaran}/edit', [PendaftaranController::class, 'edit'])->name('pendaftaran.edit');
Route::put('/pendaftaran/{pendaftaran}', [PendaftaranController::class, 'update'])->name('pendaftaran.update');
Route::delete('/pendaftaran/{pendaftaran}', [PendaftaranController::class, 'destroy'])->name('pendaftaran.destroy');
