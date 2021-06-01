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
            'location'=>$request->location,
            'description'=>$request->description
        ]);

        return redirect()->back();
    }


    public function edit($id)
    {
    $location = Location::find($id);

    return view('backend.content.locationEdit',compact('location'));
    }


public function update(Request $request, $id)
{

    $location = Location::find($id);


    $location->update([
        'location'=>$request->location,
        'description'=>$request->description
    ]);

    return redirect()->back();
}



}
