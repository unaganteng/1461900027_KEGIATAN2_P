<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class datacontroller extends Controller
{
    public function index(){
        $anggota = DB::table('anggota')->get();
        return view('tbanggota0027',['anggota'=> $anggota]);
    }
    public function cari(request $request){
        $anggota = $request->lihat;
        $anggota = DB::table('anggota')->where('anggota_nama','like',"%".$anggota."%")->paginate();
        return view ('tbanggota0027',['anggota'=> $anggota]);
    }
    public function join(){
        $anggota = DB::table('anggota')
        ->join('pinjam', 'anggota.anggota_id', '=', 'pinjam.anggota_id')
        ->select('anggota.anggota_id', 'anggota.anggota_nama', 'anggota.anggota_alamat', 'pinjam.tgl_pinjam', 'anggota.anggota_telp')
        ->get();
        return view('join0027',['anggota'=>$anggota]);
    }
    public function masuk(request $request){
        $anggota = $request->lihat;
        $anggota = DB::table('anggota')
        ->join('pinjam', 'anggota.anggota_id', '=', 'pinjam.anggota_id', 'buku','buku_deskripsi')
        ->select('anggota.anggota_id', 'anggota.anggota_nama', 'anggota.anggota_alamat', 'pinjam.tgl_pinjam', 'anggota.anggota_telp')->where('anggota_nama','like',"%".$anggota."%")
        ->get();
        return view('join0027',['anggota'=>$anggota]);
    }
}           