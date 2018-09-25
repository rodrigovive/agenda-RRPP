<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActividadAsistente extends Model
{
    //
    protected $table = 'actividad_asistentes';

    protected $fillable = [
      'asistentes_id', 'actividades_id'
    ];
}
