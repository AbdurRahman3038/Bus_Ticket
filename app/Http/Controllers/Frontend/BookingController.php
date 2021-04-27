<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function bookingTable()
    {
        return view('frontend.content.bookingTable');
    }

    // public function bookingdetails()

    // {
    //     $bookingData = Booking::with('details')->where('user_id',auth()->user()->id)->get();

    //  //   dd($bookingdeta);
    //      return view('bookingdetails',compact('bookingData'));
    //  }

}
