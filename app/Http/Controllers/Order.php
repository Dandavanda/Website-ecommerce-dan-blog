<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;
use Illuminate\support\Facades\Session;

class Order extends Controller
{
    public function Order(Request $request){
        
        DB::table('tbl_keranjang')->insert([
            'users_id' => Auth::id(),
            'id_barang' => $request->id_barang,
            'jumlah' => $request->jumlah
        ]);

        return redirect('/keranjang');
    }

    public function keranjang(){
        $keranjang = DB::table('keranjang')->get();
        return view('Keranjang', ['keranjang' => $keranjang]);
    }

    

public function Checkout(){
        $id_check = rand().rand().rand();
        $total = 0;
        $data = DB::table('tbl_keranjang')->where('users_id', '=', auth()->user()->id)->get();
                                                
        
        foreach ($data as $krj){
            $barang = DB::table('tbl_barang')->where('id', $krj->id_barang )->get();
            foreach ($barang as $brg){
                $total += ($krj->jumlah * $brg->harga);
                
                DB::table('detail_checkout')->insert([
                   'id_checkout'  => $id_check,
                   'id_barang'  => $krj->id_barang,
                   'jumlah' => $krj->jumlah
                ]);
            }
        }
        DB::table('tbl_checkout')->insert([
            'id_checkout' => $id_check,
            'users_id' => Auth::id(),
            'total' =>$total
        ]);
        return redirect('/Checkout_list');
        
    }



    
    // public function Checkout(){
    //     $id_check = rand().rand().rand();
    //     $total = 0;
    //     $data = DB::table('tbl_keranjang')->where('users_id', '=', auth()->user()->email)->get(); 
        
    //     foreach ($data as $krj){
    //         $barang = DB::table('tbl_barang')->where('id',$krj->id)->get();
            
    //         foreach ($barang as $brg){
    //             $total += ((int)$data['id_barang'] * (int)$barang['harga']);
                
    //             DB::table('detail_checkout')->insert([
    //                'id_checkout'  => $id_check,
    //                'id_barang'  => ('keranjang.id_barang'),
    //                'jumlah' => ('keranjang.jumlah')
    //             ]);
    //         }
    //         DB::table('tbl_checkout')->insert([
    //             'id_checkout' => $id_check,
    //             'users_id' => Auth::id(),
    //             'total' =>$total
    //         ]);
    //         return redirect('/Checkout_list');
    //     }
        
    // }


    public function Checkout_list(){
        $checkout = DB::table('checkout')->get();
        return view('Checkout', ['checkout' => $checkout]);
    }

    public function Confirm(){
        return view('Confirm');
    }

    public function Confirm_Simpan(Request $request){
        $this -> validate($request, [
            'file' => 'required|max:2048'
        ]);
        $file = $request->file('file');
        $nama_file = time()."_".$file->getClientOriginalName();

        $tujuan_upload = 'data_file';
        if($file->move($tujuan_upload, $nama_file)){
            DB::table('tbl_konfirmasi')->insert([
                'users_id' => Auth::id(),
                'id_checkout' => $request->id_token,
                'bukti' => $nama_file
            ]);
            return redirect('/Confirm');
        }
    }
}
