<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;



Route::get('/', function () {
Route::get('/', [HomeController::class, 'beranda']);
Route::get('/tentang', [HomeController::class, 'tentang']);
Route::get('/produk', [HomeController::class, 'produk']);
Route::get('/blog', [HomeController::class, 'blog']);
Route::get('/kontak', [HomeController::class, 'kontak']);
    return view('welcome');
});
    