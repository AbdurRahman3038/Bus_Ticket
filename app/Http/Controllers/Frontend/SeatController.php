<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use App\Models\User;
// use App\Models\Trip;
use App\Models\Seat;

class SeatController extends Controller
{
    public function seat(Request $request)
    {
        return view("frontend.content.seat");
    }

     public function create(Request $request)
    {

        Seat::create([
        'seat_number'=>json_encode($request->seat)
        ]);
        return view('frontend.content.bookingTable');

    }
}
