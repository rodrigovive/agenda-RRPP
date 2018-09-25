<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstadosActividad extends Model
{
    //
    protected $table = 'estados_actividad';

    protected $fillable = [
        'nombre',
    ];

}
