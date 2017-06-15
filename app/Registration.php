<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
  protected $connection = 'mysql';
  protected $primaryKey = 'id';
  protected $table = 'users';
  protected $fillable = [
   'firstname',
   'lastname',
   'email',
   'password'
];
}
