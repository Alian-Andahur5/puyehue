<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Turista extends Model
{
    protected $table = 'turista';

    protected $fillable = ['Nombre', 'Apellido', 'Email', 'Sexo', 'GrupoEtario' ];
}
