<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class visitas extends Model
{
  protected $table = 'visitas';

  protected $fillable = ['Destino_Nombre', 'Visitas_Id', 'Nombre', 'Fecha'];
}
