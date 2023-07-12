<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
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
        $request->file('file')->storeAs('public',$request->idbuku);

        // Masukkan Data ke table buku
        DB::table('buku')->insert([
            'idbuku' =>$request->idbuku,
            'NamaBuku' =>$request->NamaBuku,
            'NamaPengarang' =>$request->NamaPengarang,
            'Kategori' => $request->Kategori,
            'qty' => $request->qty,
            'Image' =>$request->idbuku
        ]);
        return redirect('/');
    }

    public function hapus($id){
        $buku = DB::table('buku')->where('idbuku',$id)->delete();
        return redirect('/');
    }


    public function show($id){
        $buku = DB::table('buku')->where('idbuku',$id)->get();
        return view('update',['buku'=>$buku]);
    }

    public function edit(Request $request) {
        DB::table('buku')->where('idbuku',$request->idbuku)->update([
            'NamaBuku' => $request->NamaBuku,
            'NamaPengarang' => $request->NamaPengarang,
            'Kategori' => $request->Kategori,
            'qty' => $request->qty
        ]);
        return redirect('/');

    }

}
