<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actividades extends Model
{
    //

    protected $table = 'actividades';

    protected $fillable = [
      'detalles', 'hora','fecha_inicio','fecha_final', 'lugar', 'categoria_id', 'organizador_id', 'registrador_id', 'estados_id','titulo'
    ];
}
