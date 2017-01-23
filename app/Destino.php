<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Destino extends Model
{
       protected $table = 'destino';

       protected $fillable = ['Nombre', 'Comuna' ];
}
