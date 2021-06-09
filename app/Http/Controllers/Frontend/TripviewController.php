<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Trip;

class TripviewController extends Controller
{
    public function tripview(Request $request)
    {

        $location_from_id = $request->input('location_from_id');

        $bus_type = $request->input('bus_type');
        $location_to_id = $request->input('location_to_id');
        $date = $request->input('date');
        // dd($date);
        $time_period = $request->input('time_period');
        // dd(  $date);

        if(isset( $date)){
        $tripview=Trip::where('location_from_id',$location_from_id)
        ->where('location_to_id','=',$location_to_id)
        ->whereDate('date',$date)
        ->where('user_reporting_time',$time_period)
        ->get();



        return view('frontend.content.tripview', compact('tripview'));
    }
    else{
    return redirect()->back()->with('message','Please select all options');
    }

    }


}
