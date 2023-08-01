<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\indonesia;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// Route::get('/data', function () {b  
// $jumlahProvinsi = indonesia::select('nama_provinsi', DB::raw('COUNT(*) as jumlah_provinsi'))
// ->groupBy('nama_provinsi')
// ->get([]);
// // dd($jumlahProvinsi);

// $categories = [];
// $data = [];

// foreach($jumlahProvinsi as $mp){
//     $categories[] = $mp->nama_provinsi;
//     $data[] = $mp->jumlah_provinsi;

// }

// $result = array_combine($categories,$data);
// return response()->json($result);
// });

