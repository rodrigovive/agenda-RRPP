<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoriaActividad extends Model
{
    //
    protected $table = 'categoria_actividad';

    protected $fillable = [
        'nombre',
    ];

}
