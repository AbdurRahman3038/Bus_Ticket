<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Payment;
use App\Models\Seat;
use App\Models\Booking;

class PaymentController extends Controller
{
    public function payment()
    {
        $payment=Payment::with(['userDetails','details'])->first();
        return view('frontend.content.payment',compact('payment'));
    }
    public function paymentBackend()
    {
        $payment=Payment::all();

        return view('backend.content.paymentBackend', compact('payment'));
    }


    public function create(Request $request)
    {
        $booking = Booking::where('user_id', auth()->user()->id )->get();
        // dd($booking);
       Payment::create([
            'user_id'=>auth()->user()->id,
            'booking_id'=>$booking->id,
            'phone_number'=>$request->phone_number,
            'payment_method'=>$request->payment_method,
            'transaction_id'=>$request->transaction_id,
            'amount'=>$request->amount

        ]);

        return redirect()->back();
    }
}
