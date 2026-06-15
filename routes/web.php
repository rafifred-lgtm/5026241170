<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KeranjangBelanjaController;
use App\Http\Controllers\NilaiKuliahController;
use App\Http\Controllers\EasController;
Route::get('/', function () {
    return view('welcome');
});
// crud keranjang belanja
Route::get('/keranjang', [KeranjangBelanjaController::class, 'index'])->name('keranjang.index');
Route::get('/keranjang/create', [KeranjangBelanjaController::class, 'create'])->name('keranjang.create');
Route::post('/keranjang/store', [KeranjangBelanjaController::class, 'store'])->name('keranjang.store');
Route::delete('/keranjang/delete/{id}', [KeranjangBelanjaController::class, 'destroy'])->name('keranjang.destroy');
// crud nilai kuliah
Route::get('/nilaikuliah', [NilaiKuliahController::class, 'index'])->name('nilaikuliah.index');
Route::get('/nilaikuliah/create', [NilaiKuliahController::class, 'create'])->name('nilaikuliah.create');
Route::post('/nilaikuliah/store', [NilaiKuliahController::class, 'store'])->name('nilaikuliah.store');
// crud eas
Route::get('/eas', [EasController::class, 'index'])->name('eas.index');
Route::get('/eas/create', [EasController::class, 'create'])->name('eas.create');
Route::post('/eas/store', [EasController::class, 'store'])->name('eas.store');
