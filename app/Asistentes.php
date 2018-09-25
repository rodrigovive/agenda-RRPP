<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asistentes extends Model
{
    //
    protected $table = 'asistentes';

    protected $fillable = [
      'nombre_completo', 'celular', 'email', 'dni'
    ];
}
