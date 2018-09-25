<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;
class ActivityResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        

        return [ 
            'id' => $this->id,
            'description' => $this->detalles,
            'hour' => $this->hora,
            'title' => $this->titulo,
            'date_initial' => $this->fecha_inicio,
            'data_end' => $this->fecha_final
        ];
    }
}
