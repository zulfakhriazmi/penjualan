<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
  protected $fillable = ['nama_pelanggan', 'alamat','no_hp'];
  protected $primaryKey = 'id_pelanggan';
}
