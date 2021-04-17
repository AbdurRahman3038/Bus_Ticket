<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Trip;
use App\Models\Route;
use App\Models\Bus;

class TripController extends Controller
{
    public function trip()
    {
        $trip=Trip::all();
        $routes=Route::all();
        $buses=Bus::all();
        return view("backend.content.trip", compact('trip','routes','buses'));
    }
    public function create(Request $request)
    {
       Trip::create([

           'route_from_id'=>$request->route_from_id,
            'route_to_id'=>$request->route_to_id,
            'bus_id'=>$request->bus_id,
            'date'=>$request->date,
            'user_reporting_time'=>$request->user_reporting_time,
            'departure_time'=>$request->departure_time,
            'price'=>$request->price

        ]);

        return redirect()->back();
    }
}
