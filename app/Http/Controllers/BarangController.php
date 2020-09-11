<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Barang;

class BarangController extends Controller
{
    public function index(){
	    $barang = DB::table('tbl_barang')->paginate(5);
	        return view('barang/index',['barang' => $barang]); 
	}

	public function cari(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;
        
            // mengambil data dari table pegawai sesuai pencarian data
        $posts = DB::table('tbl_barang')
        ->where('title','like',"%".$cari."%")
        ->paginate();
        
            // mengirim data pegawai ke view index
        return view('barang/index',['barang' => $barang]);
        
    }

	public function tambah()
	{
		$barang = barang::get();
        return view('barang/tambah',['barang' => $barang]); 
	}

	public function proses_tambah(Request $request)
	{
		$this->validate($request,[
			'file'=>'required |file|image|mimes:jpeg,png,jpg| max:2048',
            'nama_produk' => 'required',
			'harga' => 'required',
		]);

		$file = $request->file('file');

		$nama_file = time()."_".$file->getClientOriginalName();

		$tujuan_upload = 'data_store';
		$file->move($tujuan_upload,$nama_file);

		barang::create([
			'gambar' => $nama_file,
			'nama_produk' => $request->nama_produk,
			'harga' => $request->harga,
		]);

		return redirect('/barang');
	}

	public function edit($id){
		$barang = Barang::find($id);
		return view('barang/edit', ['barang' => $barang]);
	}

	public function update($id, Request $request){
		$file = $request->file;
        $nama_file = time().'_'.$file->getClientOriginalName();

        $tujuan_upload = 'data_store';
        $file->move($tujuan_upload, $nama_file);

        $barang = Barang::find($id);

        $barang->nama_produk = $request->nama_produk;
        $barang->harga = $request->harga;
        $barang->gambar = $nama_file;
        $barang->save();
        
		return redirect('/barang');
	}

	public function delete($id)
	{
		$barang = Barang::find($id);
		$barang->delete();
		return redirect('/barang');
	}
}
