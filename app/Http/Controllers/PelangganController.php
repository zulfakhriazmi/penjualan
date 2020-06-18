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
use App\Pelanggan;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $halaman = "pelanggan";
        $lihat = Pelanggan::all();
        return view('pelanggan/index', compact('halaman', 'lihat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $halaman = "pelanggan";

      return view('pelanggan/tambah', compact('halaman'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      Pelanggan::create([
          'nama_pelanggan' => $request->nama,
          'alamat' => $request->alamat,
          'no_hp' => $request->no_hp

      ]);


      Session::flash('flash_message', 'Pelanggan berhasil ditambah.');

          return redirect('/pelanggan');
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
      $halaman = 'pelanggan';
      $lihat = Pelanggan::find($id);

        return view ('pelanggan/edit', compact('halaman','lihat'));
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
      Pelanggan::find($id)->update([
        'nama_pelanggan' => $request->nama,
        'alamat' => $request->alamat,
        'no_hp' => $request->no_hp
      ]);



        Session::flash('flash_message', 'Data Pelanggan berhasil diubah.');
        return redirect('/pelanggan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      Pelanggan::find($id)->delete();
      Session::flash('flash_message', 'Data Pelanggan berhasil dihapus.');
          return redirect('/pelanggan');
    }
}
