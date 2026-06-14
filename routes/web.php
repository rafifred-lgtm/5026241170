<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KeranjangBelanjaController;
use App\Http\Controllers\NilaiKuliahController;
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
