<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;


Route::get('/', [BukuController::class, "index"]);
Route::get('/tambah', [BukuController::class, "tambah"])->name('tambahData');;
Route::post('/tambah', [BukuController::class, "tambah"])->name('tambahData');;
Route::post('datanya', [BukuController::class, "dataTable"])->name('dataTable');
Route::get('/{id}/ubah', [BukuController::class, "ubahData"])->name('ubahData');
Route::post('/{id}/ubah', [BukuController::class, "ubahData"])->name('ubahData');
Route::get('/{id}/lihat', [BukuController::class, "lihatData"])->name('lihatData');
Route::post('/{id}/lihat', [BukuController::class, "lihatData"])->name('lihatData');
Route::delete('{id}/hapus', [BukuController::class, "hapusData"])->name('hapusData');
