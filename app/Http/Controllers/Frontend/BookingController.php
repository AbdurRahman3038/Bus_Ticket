<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Models\Seat;
use App\Models\Booking;
use App\Models\Trip;
use App\Mail\BookingNotification;
use App\Models\Bus;

class BookingController extends Controller
{
    public function bookingTable()
    {

        $booking=Booking::all();

        return view('frontend.content.bookingTable', compact('booking'));
    }



    public function bookingBackend()
    {
        $booking=Booking::all();

        return view('backend.content.bookingBackend',compact('booking'));
    }
    public function bookingDetails($id)
    {
        $bookingdetails=Booking::find($id);
        // @dd($bookingdetails);

        return view('backend.content.bookingDetails',compact('bookingdetails'));
    }

    public function create(Request $request)
    {
// dd($request->seat);

        $trip = Trip::with(['tripBus'])->find($request->input('trip_id'));
        // dd($trip);


        if($request->seat == '')
        {
            return redirect()->back()->with('error','Please select the seat number');
        }
        else{
        $booking=Booking::create([
            'seat_number'=>$request->seat,
            'user_id'=>auth()->user()->id,
            'price'=>$trip->price,
            'date'=>$trip->date,
            'trip_id'=>$trip->id,
            'bus_type'=>$trip->tripBus->bus_type,
            ]);

        //send email to user
        // Mail::to(auth()->user()->email)->send(new BookingNotification($booking));

        return redirect()->route('payment');
    }

    }

}
