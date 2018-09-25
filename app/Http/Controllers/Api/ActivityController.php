<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Actividades;
use App\Http\Resources\ActivityCollection as ActivityCollection;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getActivities()
    {
        //
        $activities = Actividades::paginate(15);

        return new ActivityCollection($activities);
    }

}
