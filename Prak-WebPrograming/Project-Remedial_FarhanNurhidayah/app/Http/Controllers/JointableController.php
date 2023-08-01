<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Provinsi;


use App\Models\Pulau;

class JointableController extends Controller
{
    function index()
    {
    	$data = Pulau::join('provinsi', 'provinsi.kode_pulau', '=', 'pulau.kode_pulau')
              		->join('kota', 'kota.kode_provinsi', '=', 'provinsi.kode_provinsi')
              		->get(['pulau.nama_pulau', 'provinsi.nama_provinsi', 'kota.nama_kota']);


        return view('join_table', compact('data'));
    }


}
