<?php

use Illuminate\Support\Facades\Route;
use App\Pengguna;
use Illuminate\Http\Request;

session_start();

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
Route::get('/', function () {
  $halaman="";
    return view('template/login',compact('halaman'));
});

Route::post('/auth', 'LoginController@auth');


Route::get('/logout', 'LoginController@logout');

if(isset($_SESSION['username'])){
  if($_SESSION['username'] == true){

Route::get('/dashboard', function () {
    $halaman="index";
    return view('welcome', compact('halaman'));
});

Route::get('/pelanggan', 'PelangganController@index');
Route::get('/produk', 'ProdukController@index');
Route::get('/kategori', 'KategoriController@index');
Route::get('/transaksi', 'TransaksiController@index');

Route::get('/tambahpelanggan', 'PelangganController@create');
Route::get('/tambahproduk', 'ProdukController@create');
Route::get('/tambahkategori', 'KategoriController@create');
Route::get('/tambahtransaksi', 'TransaksiController@create');

Route::post('/simpanpelanggan', 'PelangganController@store');
Route::post('/simpanproduk', 'ProdukController@store');
Route::post('/simpankategori', 'KategoriController@store');
Route::post('/simpantransaksi', 'TransaksiController@store');

Route::get('/editpelanggan/{id}', 'PelangganController@edit');
Route::get('/editproduk/{id}', 'ProdukController@edit');
Route::get('/editkategori/{id}', 'KategoriController@edit');
Route::get('/edittransaksi/{id}', 'TransaksiController@edit');

Route::post('/ubahpelanggan/{id}', 'PelangganController@update');
Route::post('/ubahproduk/{id}', 'ProdukController@update');
Route::post('/ubahkategori/{id}', 'KategoriController@update');
Route::get('/detailtransaksi/{id}', 'TransaksiController@show');
Route::get('/ajax', 'TransaksiController@harga');



Route::delete('hapuspelanggan/{id}', 'PelangganController@destroy');
Route::delete('/hapusproduk/{id}', 'ProdukController@destroy');
Route::delete('/hapuskategori/{id}', 'KategoriController@destroy');
Route::delete('/hapustransaksi/{id}', 'TransaksiController@destroy');

}
}
