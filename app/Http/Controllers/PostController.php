<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Posts;

class PostsController extends Controller
{
    public function index(){
	    $posts = DB::table('posts')->paginate(5);
	        return view('post/index',['posts' => $posts]); 
	}

	public function cari(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;
        
            // mengambil data dari table pegawai sesuai pencarian data
        $posts = DB::table('posts')
        ->where('title','like',"%".$cari."%")
        ->paginate();
        
            // mengirim data pegawai ke view index
        return view('post/index',['posts' => $posts]);
        
    }

	public function tambah()
	{
		$posts = posts::get();
        return view('post/tambah',['posts' => $posts]); 
	}

	public function proses_tambah(Request $request)
	{
		$this->validate($request,[
			'file'=>'required |file|image|mimes:jpeg,png,jpg| max:2048',
            'category_id' => 'required',
			'title' => 'required',
			'content' => 'required',
		]);

		$file = $request->file('file');

		$nama_file = time()."_".$file->getClientOriginalName();

		$tujuan_upload = 'data_file';
		$file->move($tujuan_upload,$nama_file);

		posts::create([
			'fileAset' => $nama_file,
			'category_id' => $request->category_id,
			'title' => $request->title,
			'content' => $request->content,
		]);

		return redirect()->back();
	}

	public function edit($id){
		$posts = Posts::find($id);
		return view('post/edit', ['posts' => $posts]);
	}

	public function update($id, Request $request){
		$file = $request->file;
        $nama_file = time().'_'.$file->getClientOriginalName();

        $tujuan_upload = 'data_file';
        $file->move($tujuan_upload, $nama_file);

        $posts = Posts::find($id);

        $posts->category_id = $request->category_id;
        $posts->title = $request->title;
        $posts->fileAset = $nama_file;
        $posts->save();
        
		return redirect('/post');
	}

	public function delete($id)
	{
		$posts = Posts::find($id);
		$posts->delete();
		return redirect('/post');
	}
	

}
