<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Trip;


class SeatController extends Controller
{
    public function seat(Request $request)
    {
        $trip = Trip::where('id',$request->input('id'))->first();
        $alreadyBookSeat = Booking::select('seat_number')->where('trip_id',$trip->id)->where('status','Confirm')->get()->toArray();

        $seatArray = [];

        foreach($alreadyBookSeat as $key=>$seat){

            foreach($seat['seat_number'] as $index=>$value){

                $seatArray [] = $value;
            }
        }



        return view("frontend.content.seat",compact('seatArray'));
    }


}
