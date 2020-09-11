<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Post;

class AwalController extends Controller
{
    public function index() {
        $tampil = Post::all();
        return view(('awal.awal') , ['tampil' => $tampil]);
        $barang = DB::table('tbl_barang')->get();
        return view('awal.awal', compact('barang'));
    }

    public function show($id) {
        $tampil = Post::findOrFail($id);
        return view('awal.detail_berita', compact('tampil'));
    }

    

    // public function index() {
    //     $nama ="aslkfnaslkfdnalkfsn";
    //     return view('awal/awal' , ['nama' => $nama]);
    // }
}



