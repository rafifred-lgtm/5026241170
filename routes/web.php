<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KeranjangBelanjaController;

Route::get('/', function () {
    return view('welcome');
});
// crud keranjang belanja
Route::get('/keranjang', [KeranjangBelanjaController::class, 'index'])->name('keranjang.index');
Route::get('/keranjang/create', [KeranjangBelanjaController::class, 'create'])->name('keranjang.create');
Route::post('/keranjang/store', [KeranjangBelanjaController::class, 'store'])->name('keranjang.store');
Route::delete('/keranjang/delete/{id}', [KeranjangBelanjaController::class, 'destroy'])->name('keranjang.destroy');
