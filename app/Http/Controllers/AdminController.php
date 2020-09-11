<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Posts;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('hallo');
    }

    public function index()
    {   $tampil = DB::table('posts')->get();
		return view('/awal', compact('tampil'));
        // return view('home');
    }


    public function detail_berita()
    {
        return view('home/detail_berita');
    }

    
}
