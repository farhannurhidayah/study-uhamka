<?php

use App\Http\Controllers\chartController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JointableController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [JointableController::class, 'index']);

// Route::get('welcome', [chartController::class, 'index']);

Route::get('grafik', [chartController::class, 'grafik']);

Route::get('grafik2', [chartController::class, 'grafik2']);

Route::post('/tambah', [chartController::class,'tambah']);

