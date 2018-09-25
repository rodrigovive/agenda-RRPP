<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrganizadorActividad extends Model
{
    //
    protected $table = 'organizador_actividad';

    protected $fillable = [
      'nombre', 'apellido', 'celular', 'email'
    ];
}
