<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RegistradorActividad extends Model
{
    //
    protected $table = 'registrador_actividad';

    protected $fillable = [
        'nombre', 'apellido', 'celular', 'email'
    ];
}
