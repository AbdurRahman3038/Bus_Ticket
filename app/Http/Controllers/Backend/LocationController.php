<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Location;

class LocationController extends Controller
{
    public function location()
    {
        $location=Location::all();
        return view("backend.content.location", compact('location'));
    }
    public function create(Request $request)
    {
       Location::create([
            'from'=>$request->from,
            'to'=>$request->to
        ]);

        return redirect()->back();
    }
}
