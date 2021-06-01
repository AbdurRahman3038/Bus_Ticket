<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bus;

class BusController extends Controller
{
    public function bus()
    {
        $bus=Bus::all();
        return view("backend.content.bus",compact('bus'));
    }

    public function create(Request $request)
    {
       Bus::create([
            'bus_type'=>$request->bus_type,
            'seat_capacity'=>$request->seat_capacity,
            'route_type'=>$request->route_type

        ]);

        return redirect()->back();
    }

    public function delete($id)
    {
        $bus=Bus::find($id);
        $bus->delete();
        return redirect()->back()->with('success','Bus deleted successfully.');
    }
}
