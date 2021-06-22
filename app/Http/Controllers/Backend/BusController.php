<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bus;

class BusController extends Controller
{
    public function bus()
    {
        $bus=Bus::where('status','Active')->get();
        return view("backend.content.bus",compact('bus'));
    }

    public function create(Request $request)
    {
       Bus::create([
            'bus_number'=>$request->bus_number,
            'bus_type'=>$request->bus_type,
            'seat_capacity'=>$request->seat_capacity,
            'route_type'=>$request->route_type,
            'driver_name'=>$request->driver_name,
            'supervisor_name'=>$request->supervisor_name

        ]);

        return redirect()->back();
    }
    public function edit($id)
    {
        $bus = bus::find($id);

        return view('backend.content.busEdit',compact('bus'));
    }


    public function update(Request $request, $id)
    {

        $bus = Bus::find($id);

        $bus->update([
            'bus_number'=>$request->bus_number,
            'bus_type'=>$request->bus_type,
            'seat_capacity'=>$request->seat_capacity,
            'route_type'=>$request->route_type,
            'driver_name'=>$request->driver_name,
            'supervisor_name'=>$request->supervisor_name,
    ]);

        return redirect()->back();
    }
    public function delete(Request $request, $id)
    {

        $bus = Bus::find($id);

        $bus->update([
            
            'status'=>'Deactive',
    ]);

        return redirect()->back();
    }
}
