<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actividades extends Model
{
    //

    protected $table = 'actividades';

    protected $fillable = [
      'detalles', 'hora_inicial','hora_final','fecha','lugar', 'categoria_id', 'organizador_id', 'registrador_id', 'estados_id','titulo'
    ];
}
