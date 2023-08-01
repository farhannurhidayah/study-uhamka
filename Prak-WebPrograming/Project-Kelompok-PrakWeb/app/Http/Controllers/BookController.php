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
        $farhanuas = DB::table('farhanuas')->get();
        return view('index',['farhanuas' => $farhanuas]);
    }

    public function  cari($id)
    {
        $farhanuas = DB::table('farhanuas')->where('idvideo', $id)->get();
        return view('index',['farhanuas' => $farhanuas]);
    }

    public function tambah(Request $request)
    {
        $request->file('file')->storeAs('public',$request->idvideo);

        // Masukkan Data ke table farhanuas
        DB::table('farhanuas')->insert([
            'idvideo' =>$request->idvideo,
            'judul' =>$request->judul,
            'creator' =>$request->creator,
            'description' => $request->description,
            'rating' => $request->rating,
            'viewer' =>$request->viewer,
            'alamatvideo' =>$request->idvideo
        ]);
        return redirect('/home');
    }

    public function hapus($id){
        $farhanuas = DB::table('farhanuas')->where('idvideo',$id)->delete();
        return redirect('/home');
    }


    public function show($id){
        $farhanuas = DB::table('farhanuas')->where('idvideo',$id)->get();
        return view('update',['farhanuas'=>$farhanuas]);
    }

    public function edit(Request $request) {
        DB::table('farhanuas')->where('idvideo',$request->idvideo)->update([
            'idvideo' =>$request->idvideo,
            'judul' =>$request->judul,
            'creator' =>$request->creator,
            'description' => $request->description,
            'rating' => $request->rating,
            'viewer' =>$request->viewer,
            'alamatvideo' =>$request->idvideo
        ]);
        return redirect('/home');

    }

    public function signin()
    {
        return view('signin');
    }
    // navbar
    public function belanja()
    {
        return view('katalog');
    }

    public function tentang()
    {
        return view('tentang');
    }

    public function kontak()
    {
        return view('kontak');
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

    public function login()
    {
        return view('login');
    }

    public function masuk(Request $request){
        $user = $request->input('username');
        $password = $request->input('password');

        $datauser = DB::table('user')->where(['username'=>$user])->first();
        if(count((array)$datauser)!=0){
            $combine=$datauser->password.$datauser->extend;
        }

            if($datauser->username == $user AND Hash::check($password,$combine)){
                $request->session()->put('username',$datauser->username);
                $request->session()->put('status',$datauser->status);
                return redirect('/');
            }
            else{
                return redirect('/')->with(['error'=>'Username dan Password tidak ditemukan']);
            }
    }
    public function Tonton($id){
        $farhanuas = DB::table('farhanuas')->where('idvideo',$id)->get();
        return view('watch',['farhanuas'=>$farhanuas]);
    }

    
    public function logout(){
        session()->forget('username');
        session()->forget('status');
        return view('home');
    }
}
