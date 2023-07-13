<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [BookController::class,'awal']);

// Route::get('/beranda', [BookController::class,'beranda']);
Route::get('/home', [BookController::class,'home']);

Route::get('/table', [BookController::class,'index']);

Route::get('/cari/{id}', [BookController::class,'cari']);

Route::post('/tambah', [BookController::class,'tambah']);

Route::get('/hapus/{id}', [BookController::class,'hapus']);

Route::post('/tambah', [BookController::class,'tambah']);

Route::get('/show/{id}', [BookController::class,'show']);

Route::post('/edit',[BookController::class,'edit']);

Route::get('/signin', [BookController::class,'signin']);

Route::post('/registrasi', [BookController::class,'registrasi']);

Route::post('/login', [BookController::class,'login']);

Route::get('/logout', [BookController::class,'logout']);

Route::get('/Tonton/{id}', [BookController::class,'Tonton']);
