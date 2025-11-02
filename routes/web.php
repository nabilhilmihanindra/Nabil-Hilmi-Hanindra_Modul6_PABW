<?php

use App\Http\Controllers\ProfileController;


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaporanController;

Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/home', [LaporanController::class, 'form'])->name('home');
Route::get('/buatlaporan', [LaporanController::class, 'form'])->name('buatlaporan');
Route::post('/simpan', [LaporanController::class, 'simpan'])->name('simpan');
Route::get('/laporansaya', [LaporanController::class, 'daftar'])->name('laporansaya');
Route::view('/notifikasi', 'notifikasi')->name('notifikasi');
Route::view('/kotaktinjauan', 'kotaktinjauan')->name('kotaktinjauan');


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/laporan', [LaporanController::class, 'index'])->name('laporan.index');
Route::get('/laporan/create', [LaporanController::class, 'create'])->name('laporan.create');
Route::post('/laporan/store', [LaporanController::class, 'store'])->name('laporan.store');



require __DIR__.'/auth.php';
