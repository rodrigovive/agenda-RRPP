<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;
use App\Actividades;
use App\Http\Resources\ActivityResource;

class ActivityCollection extends ResourceCollection
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $this->collection->transform(function (Actividades $activity) {
            return (new ActivityResource($activity));
        });

        return parent::toArray($request);
    }
}
