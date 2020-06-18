<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
  protected $fillable = ['id_kategori', 'nama_produk','harga'];
  protected $primaryKey = 'id_produk';
}
