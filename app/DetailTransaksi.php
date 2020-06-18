<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailTransaksi extends Model
{
  protected $fillable = ['id_transaksi', 'id_produk','qty'];

}
