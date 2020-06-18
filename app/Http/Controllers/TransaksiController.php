<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Input;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Session;
use Illuminate\Pagination\LengthAwarePagination;
use Illuminate\Database\Query\Builder;
use Redirect;
use App\Transaksi;
use App\Pelanggan;
use App\Produk;
use App\DetailTransaksi;




class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
     {
         $halaman = "transaksi";
         $lihat = Transaksi::join('pelanggans','pelanggans.id_pelanggan','=','transaksis.id_pelanggan')
         ->select('transaksis.*','pelanggans.nama_pelanggan', 'pelanggans.alamat')
         ->get();
         return view('transaksi/index', compact('halaman', 'lihat'));
     }

     /**
      * Show the form for creating a new resource.
      *
      * @return \Illuminate\Http\Response
      */
     public function create()
     {
       $halaman = "transaksi";
       $lihat = Pelanggan::all();
       $lihat1 = Produk::all();


       return view('transaksi/tambah', compact('halaman','lihat','lihat1'));
     }

     /**
      * Store a newly created resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @return \Illuminate\Http\Response
      */
     public function store(Request $request)
     {
       Transaksi::create([
           'id_pelanggan' => $request->id_pelanggan
       ]);
         $id_transaksi = DB::TABLE('transaksis')->ORDERBY('id_transaksi','desc')->value('id_transaksi');
       $id_produk = $request->id_produk;
      
           foreach($id_produk as $key => $value){

           DetailTransaksi::create([
              'id_transaksi' => $id_transaksi,
               'id_produk'=>$request->id_produk[$key],
               'qty'=>$request->qty[$key]
           ]);
         }
       Session::flash('flash_message', 'transaksi berhasil ditambah.');

           return redirect('/transaksi');
     }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function show($id)
     {
       $halaman = 'transaksi';
       $lihat = Transaksi::join('pelanggans','pelanggans.id_pelanggan','=','transaksis.id_pelanggan')
       ->select('transaksis.*','pelanggans.nama_pelanggan', 'pelanggans.alamat','pelanggans.no_hp')
       ->where('transaksis.id_transaksi', $id)
       ->get();

       $lihat1 = Transaksi::join('detail_transaksis','detail_transaksis.id_transaksi','=','transaksis.id_transaksi')
       ->join('produks','detail_transaksis.id_produk','=','produks.id_produk')
       ->select('transaksis.*','produks.*', 'detail_transaksis.*')
       ->where('transaksis.id_transaksi', $id)
       ->get();


         return view ('transaksi/show', compact('halaman','lihat','lihat1'));
     }

     public function harga()
     {
       $id_produk = $request->id_produk;
   $harga = Produk::where('id_produk', '=', $id_produk)->get();
   return response()->json($harga);
     }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
