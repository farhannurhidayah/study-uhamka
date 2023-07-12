<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Storage;

class BookController extends Controller
{


    public function awal()
    {
        return view('login');
    }

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
        return redirect('/home');
    }

    public function hapus($id){
        $buku = DB::table('buku')->where('idbuku',$id)->delete();
        return redirect('/home');
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
        return redirect('/home');

    }

    public function signin()
    {
        return view('signin');
    }

    

    public function registrasi(Request $request){
        //mengenkripsi password dan split jadi 2
        $cryptpassword=Hash::make($request->password);
        $split=str_split($cryptpassword, 30);
        
        //insert data ke table books
        DB::table('user')->insert([
            'username' => $request->username,
            'password' => $split[0],
            'extend' => $split[1],
            'status' => 'user'
        ]);
        return redirect('/')-> with(['success'=>'User Name dan Password telah terdaftar, silahkan gunakan untuk sign in']);
    }

    public function login(Request $request){
        $user = $request->input('username');
        $password = $request->input('password');

        $datauser = DB::table('user')->where(['username'=>$user])->first();
        if(count((array)$datauser)!=0){
            $combine=$datauser->password.$datauser->extend;
        }

            if($datauser->username == $user AND Hash::check($password,$combine)){
                $request->session()->put('username',$datauser->username);
                $request->session()->put('status',$datauser->status);
                return redirect('/home');
            }
            else{
                return redirect('/')->with(['error'=>'Username dan Password tidak ditemukan']);
            }
    }

    
    public function logout(){
        session()->forget('username');
        session()->forget('status');
        return view('login');
    }
}
