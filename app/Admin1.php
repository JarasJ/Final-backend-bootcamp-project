<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin1 extends Model
{
  protected $connection = 'mysql'; // def value: mysql
  protected $primaryKey = 'id';
  protected $table = 'Choices';
  protected $fillable = [
  'service',
  'price',
  ];
}
