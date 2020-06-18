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
use App\Kategori;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
     {
         $halaman = "kategori";
         $lihat = Kategori::all();
         return view('kategori/index', compact('halaman', 'lihat'));
     }

     /**
      * Show the form for creating a new resource.
      *
      * @return \Illuminate\Http\Response
      */
     public function create()
     {
       $halaman = "kategori";

       return view('kategori/tambah', compact('halaman'));
     }

     /**
      * Store a newly created resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @return \Illuminate\Http\Response
      */
     public function store(Request $request)
     {
       Kategori::create([
           'nama_kategori' => $request->nama
         ]);

       Session::flash('flash_message', 'Kategori berhasil ditambah.');

           return redirect('/kategori');
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
       $halaman = 'kategori';
       $lihat = Kategori::find($id);

         return view ('kategori/edit', compact('halaman','lihat'));
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
       Kategori::find($id)->update([
         'nama_kategori' => $request->nama
       ]);



         Session::flash('flash_message', 'Data Kategori berhasil diubah.');
         return redirect('/kategori');
     }

     /**
      * Remove the specified resource from storage.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function destroy($id)
     {
       Kategori::find($id)->delete();
       Session::flash('flash_message', 'Data Kategori berhasil dihapus.');
           return redirect('/kategori');
     }
 }
