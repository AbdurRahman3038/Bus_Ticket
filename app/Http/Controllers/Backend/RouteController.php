<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Route;

class RouteController extends Controller
{
    public function route()
    {
        $route=Route::all();
        return view("backend.content.route", compact('route'));
    }
    public function create(Request $request)
    {
       Route::create([
            'from'=>$request->from,
            'to'=>$request->to
            // 'date'=>$request->date,
            // 'time_period'=>$request->time_period,
            // 'coach_type'=>$request->coach_type
        ]);

        return redirect()->back();
    }
}
