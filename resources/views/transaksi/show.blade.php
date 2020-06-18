@extends('template/index')
@section('content')
<style>
.pesan{
  display: none;
  color: red;

}
</style>
<h4 style="margin-bottom:30px;" class="header-title m-t-0 m-b-30">Detail Transaksi</h4>
      @foreach($lihat as $p)
      <div class="row" style="margin-bottom:30px;">
        <div class="col-lg-3"></div>
        <div class="col-lg-6">
          <table>
            <tr>
              <td>Nama Pelanggan</td>
              <td>&nbsp;:</td>
              <td>&nbsp;&nbsp;<input type="text" width="30%" name="nama_pelanggan" value="{{$p->nama_pelanggan}}" disabled/></td>
            </tr>
            <tr>
              <td>Alamat</td>
              <td>&nbsp;:</td>
              <td>&nbsp;&nbsp;<input type="text" width="30%" name="alamat" value="{{$p->alamat}}" disabled/></td>
            </tr>
            <tr>
              <td>No HP</td>
              <td>&nbsp;:</td>
              <td>&nbsp;&nbsp;<input type="text" width="30%" name="no_hp" value="{{$p->no_hp}}" disabled/></td>
            </tr>
            <tr>
              <td>Tgl Transaksi</td>
              <td>&nbsp;:</td>
              <td>&nbsp;&nbsp;<input type="text" width="30%" name="tgl_transaksi" value="<?=date('d F Y', strtotime($p->created_at))?>" disabled/></td>

            </tr>
          </table>

        </div>
        <div class="col-lg-3"></div>
      </div>
@endforeach

<h4 style="margin-bottom:30px;" class="header-title m-t-0 m-b-30">Barang yang Dibeli:</h4>

<table class="table table-bordered table-striped table-hover ">

  <thead>
    <tr>
      <th class="text-center">Nama Barang</th>
      <th class="text-center">Harga</th>
      <th class="text-center">Qty</th>
      <th class="text-center">Total</th>
      </tr>
  </thead>
  <tbody>
    <?php $total=0; ?>
    @foreach ($lihat1 as $a)
    <tr>
      <center>
      <td class="text-center">{{$a->nama_produk}}</td>
      <td class="text-center">Rp. <?=number_format($a->harga,2,',','.')?></td>
      <td class="text-center">{{$a->qty}}</td>
      <td class="text-center">Rp. <?=number_format($a->harga * $a->qty,2,',','.')?></td>

    </center>

    </tr>
    <?php
    $total += $a->harga * $a->qty;
    ?>
    @endforeach

    <tr>
      <td colspan="3" class="text-center">Total Belanja</td>
      <td class="text-center">Rp. <?=number_format($total, 0, ',', '.')?></td>
    </tr>

      </tbody>
    </table>

@endsection
