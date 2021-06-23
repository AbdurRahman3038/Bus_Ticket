<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Trip;
use App\Models\Location;
use App\Models\Bus;

class TripController extends Controller
{
    public function trip()
    {
        $trip=Trip::where('status','Active')->get();
        $locations=Location::all();
        $buses=Bus::all();
        return view("backend.content.trip", compact('trip','locations','buses'));
    }
    public function create(Request $request)
    {
       Trip::create([

           'location_from_id'=>$request->location_from_id,
            'location_to_id'=>$request->location_to_id,
            'route_name'=>$request->route_name,
            'bus_id'=>$request->bus_id,
            'date'=>$request->date,
            'user_reporting_time'=>$request->user_reporting_time,
            'departure_time'=>$request->departure_time,
            'price'=>$request->price

        ]);

        return redirect()->back();
    }


    public function search(Request $request)
    {
        $search=$request->search;
        if($search){
            $trip=Trip::where('route_name','like','%'.$search.'%')->get();

        }
        else
        {
            $trip=Trip::all();
        }

        // where(name=%search%)
        $title="Search result";
        $locations=Location::all();
        $buses=Bus::all();
        return view('backend.content.trip',compact('title','trip','search','locations','buses'));
    }



    public function edit($id)
    {
        $trip = Trip::find($id);
        $locations=Location::all();
        $bus=Bus::all();
        return view('backend.content.tripEdit',compact('trip','locations','bus'));
    }

    public function update(Request $request, $id)
    {

        $trip = Trip::find($id);

        $trip->update([
            'location_from_id'=>$request->location_from_id,
            'location_to_id'=>$request->location_to_id,
            'route_name'=>$request->route_name,
            'bus_id'=>$request->bus_id,
            'date'=>$request->date,
            'user_reporting_time'=>$request->user_reporting_time,
            'departure_time'=>$request->departure_time,
            'price'=>$request->price
    ]);

        return redirect()->back();
    }


    public function delete(Request $request, $id)
    {

        $trip = Trip::find($id);

        $trip->update([

            'status'=>'Deactive',
    ]);

        return redirect()->back();
    }
}
