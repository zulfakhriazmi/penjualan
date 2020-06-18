<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class User extends Model
{

  protected $fillable = ['username','password'];
  protected $primaryKey = 'id_user';
}
