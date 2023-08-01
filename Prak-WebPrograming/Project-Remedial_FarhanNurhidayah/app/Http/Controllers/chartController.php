<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\indonesia;
use Illuminate\Support\Facades\DB;

class chartController extends Controller
{
    

    // public function awal() {
    //     return view('/');
    // }
    public function index()
    {
        $jumlahProvinsi = indonesia::select('nama_provinsi', DB::raw('COUNT(*) as jumlah_provinsi'))
        ->groupBy('nama_provinsi')
        ->get([]);
        // dd($jumlahProvinsi);

        // $categories = [];
        // $data = [];

        // foreach($jumlahProvinsi as $mp){
        //     $categories[] = $mp->nama_provinsi;
        //     $data[] = $mp->jumlah_provinsi;
       
        // }
       
        // $result = array_combine($categories,$data);
       
        return view('welcome', compact('jumlahProvinsi'));
       
    }

    public function grafik() {
        return view('grafik');
    }
    public function grafik2() {
        return view('contoh');
    }
    
    public function tambah(Request $request)
    {

        // Masukkan Data ke table buku
        DB::table('indonesia')->insert([
            'id' =>$request->id,
            'nama_pulau' =>$request->nama_pulau,
            'nama_provinsi' =>$request->nama_provinsi,
            'nama_kota' => $request->nama_kota,
        ]);
        return redirect('join_table');
    }


}

