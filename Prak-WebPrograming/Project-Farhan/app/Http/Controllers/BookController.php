<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function index()
    {
        $buku = DB::table('buku')->get();
        return view('index',['buku' => $buku]);
    }

    public function  cari($id)
    {
        $buku = DB::table('buku')->where('idbuku', $id)->get();
        return view('index',['buku' => $buku]);
    }

    public function tambah(Request $request)
    {
        $request->file('file')->storeAs('public', $request->idbuku);

        // Masukkan Data ke table buku
        DB::table('books')->insert([
            'idbuku' =>$request->idbuku,
            'NamaBuku' => $request->NamaBuku,
            'NamaPengarang' =>$request->NamaPengarang,
            'Kategori' => $request->qty,
            'qty' => $request->qty,
            'Image' => $request->idbuku
        ]);
        return redirect('/');
    }


}
