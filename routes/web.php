<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'Utama@index');


Route::get('/awal', 'AwalController@index');
Route::get('/awal/{id}', 'AwalController@show');

Route::post('/post/{post}/comment', 'PostCommentController@store')->name('post.comment.store');


Route::post('/pushdata', 'Utama@store');
Route::post('/AddCart', 'Order@Order');
Route::get('/keranjang', 'Order@Keranjang');

Route::post('/Konfirmasi', 'Order@Order');
Route::get('/Checkout', 'Order@Checkout');

Route::get('/Checkout_list', 'Order@Checkout_list');

Route::get('/confirm', 'Order@Confirm');
Route::post('/Konfirm', 'Order@Confirm_Simpan');


Route::get('/post', 'PostsController@index');
Route::get('/post/tambah', 'PostsController@tambah');
Route::post('/post/tambah/proses', 'PostsController@proses_tambah');
Route::get('/post/edit/{id}','PostsController@edit');
Route::post('/post/update/{id}','PostsController@update');
Route::get('/post/cari','PostsController@cari');
Route::get('/post/hapus/{id}', 'PostsController@delete');




Route::get('/barang', 'BarangController@index');
Route::get('/barang/tambah', 'BarangController@tambah');
Route::post('/barang/tambah/proses', 'BarangController@proses_tambah');
Route::get('/barang/edit/{id}','BarangController@edit');
Route::post('/barang/update/{id}','BarangController@update');
Route::get('/barang/cari','BarangController@cari');
Route::get('/barang/hapus/{id}', 'BarangController@delete');




Route::group(['middleware' => ['web', 'auth']], function(){
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/dashboard', function(){
        if(Auth::user()->admin == 1){
            return view ('hallo');
        }else{
            return view('awal');
        }
        });
    });
Auth::routes();
