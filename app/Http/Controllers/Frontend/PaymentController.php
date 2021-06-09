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
        $payment=Booking::with(['userDetails','details'])->where('status','Pending')->orderBy('id', 'DESC')->first();
        // dd( $payment);
        return view('frontend.content.payment',compact('payment'));
    }
    public function paymentBackend()
    {
        $payment=Payment::where('status','Pending')->get();
        return view('backend.content.paymentBackend', compact('payment'));
    }


    public function create(Request $request)
    {
        // $bookings = Booking::where('user_id', auth()->user()->id )->get();
        // dd($booking);
        // foreach($bookings as $booking)
        // {


       Payment::create([
            'user_id'=>auth()->user()->id,
            // 'booking_id'=>$booking->id,
            'phone_number'=>$request->phone_number,
            'payment_method'=>$request->payment_method,
            'transaction_id'=>$request->transaction_id,
            'amount'=>$request->amount

        ]);
    //    }




        return redirect()->route('ticket');
    }

    public function paymentBackendConfirm($id){
        $payment=Payment::find($id);

        $payment->update([

            'status'=>'Confirm',

        ]);

        $bookings = Booking::where('user_id',$payment->user_id)->where('status','Pending')->get();
        // dd( $booking);
        foreach( $bookings as  $booking){
        $booking->update([

            'status'=>'Confirm',

        ]);
    }
        return redirect()->back();
    }

    public function paymentBackendCancel($id){
        $payment=Payment::find($id);

        $payment->update([

            'status'=>'Cancel',

        ]);

        $bookings = Booking::where('user_id',$payment->user_id)->where('status','Pending')->get();
// dd( $booking);
foreach( $bookings as  $booking){
        $booking->update([

            'status'=>'Cancel',

        ]);
}
        return redirect()->back();
    }


}
