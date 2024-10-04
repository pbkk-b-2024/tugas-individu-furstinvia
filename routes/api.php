<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\KategoriController;
use App\Http\Controllers\Api\BarangController;
use App\Http\Controllers\Api\Auth\LoginController;
use App\Http\Controllers\Api\Auth\LogoutController;
use App\Http\Controllers\Api\Auth\RegisterController;

// Rute untuk registrasi pengguna
Route::post('/register', RegisterController::class);
Route::post('/login', LoginController::class);

// Rute untuk logout menggunakan middleware auth:sanctum
Route::post('/logout', LogoutController::class)->middleware('auth:sanctum');

// Rute untuk kategori dengan middleware auth:sanctum
Route::prefix('kategori')->middleware('auth:sanctum')->group(function () {
    Route::get('/', [KategoriController::class, 'index']);
    Route::get('/{id}', [KategoriController::class, 'single']);
    Route::post('/', [KategoriController::class, 'store']);
    Route::put('/{id}', [KategoriController::class, 'update']);
    Route::delete('/{id}', [KategoriController::class, 'destroy']);
});

// Rute untuk barang dengan middleware auth:sanctum
Route::prefix('barang')->middleware('auth:sanctum')->group(function () {
    Route::get('/', [BarangController::class, 'index']);
    Route::get('/{id}', [BarangController::class, 'single']);
    Route::post('/', [BarangController::class, 'store']);
    Route::put('/{id}', [BarangController::class, 'update']);
    Route::delete('/{id}', [BarangController::class, 'destroy']);
    Route::get('/cari', [BarangController::class, 'search']);
});