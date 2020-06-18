<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Session;
use Illuminate\Pagination\LengthAwarePagination;
use Illuminate\Database\Query\Builder;
use Redirect;
use App\Produk;
use App\Kategori;


class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
     {
         $halaman = "produk";
         $lihat = Produk::join('kategoris','kategoris.id_kategori','=','produks.id_kategori')
         ->select('produks.*','kategoris.*')
         ->get();
         return view('produk/index', compact('halaman', 'lihat'));
     }

     /**
      * Show the form for creating a new resource.
      *
      * @return \Illuminate\Http\Response
      */
     public function create()
     {
       $halaman = "produk";
       $lihat = Kategori::all();

       return view('produk/tambah', compact('halaman','lihat'));
     }

     /**
      * Store a newly created resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @return \Illuminate\Http\Response
      */
     public function store(Request $request)
     {
       Produk::create([
         'id_kategori' => $request->id_kategori,
           'nama_produk' => $request->nama,
           'harga' => $request->harga
       ]);


       Session::flash('flash_message', 'Produk berhasil ditambah.');

           return redirect('/produk');
     }

     /**
      * Display the specified resource.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function show($id)
     {
         //
     }

     /**
      * Show the form for editing the specified resource.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function edit($id)
     {
       $halaman = 'produk';
       $lihat = Produk::find($id);
       $kat = Kategori::all();


         return view ('produk/edit', compact('halaman','lihat','kat'));
     }

     /**
      * Update the specified resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function update(Request $request, $id)
     {
       Produk::find($id)->update([
         'id_kategori' => $request->id_kategori,
           'nama_produk' => $request->nama,
           'harga' => $request->harga
       ]);



         Session::flash('flash_message', 'Data Produk berhasil diubah.');
         return redirect('/produk');
     }

     /**
      * Remove the specified resource from storage.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function destroy($id)
     {
       Produk::find($id)->delete();
       Session::flash('flash_message', 'Data Produk berhasil dihapus.');
           return redirect('/produk');
     }
 }
