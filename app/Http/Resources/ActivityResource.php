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
            'hour_initial' => $this->hora_inicial,
            'hour_end' => $this->hora_final,
            'title' => $this->titulo,
            'date' => $this->fecha,
            //'data_end' => $this->fecha_final
        ];
    }
}
