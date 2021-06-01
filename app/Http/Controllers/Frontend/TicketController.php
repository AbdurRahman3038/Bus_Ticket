<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ticket;
use App\Models\Booking;
use App\Models\Trip;
// use App\Models\User;

class TicketController extends Controller
{
    public function ticket()
    {
        $booking=Booking::with(['userDetails'])->get();
        // $booking=User::all();
        return view('frontend.content.ticket',compact('booking'));
    }

    public function ticketView()
    {
        $trip=Trip::all();
        $booking=Booking::with(['trip', 'userDetails'])->get();
        // dd( $booking);
        // $booking=User::all();
        return view('frontend.content.ticketView',compact('booking','trip'));
    }

}
