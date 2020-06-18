<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
  protected $fillable = ['id_pelanggan', 'total'];
  protected $primaryKey = 'id_transaksi';
}
