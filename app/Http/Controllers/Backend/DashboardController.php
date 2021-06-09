<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Booking;
use App\Models\Payment;
use App\Models\Bus;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $users = User::where('role','user')->count();
        // dd($users);
        $bookings = Booking::where('status','Confirm')->count();
        // dd($bookings);
        $payments = Payment::where('status','Confirm')->get();

        $sell = 0;
        foreach($payments as $payment){

            $sell += $payment->amount;

        }

        $buses = Bus::count();
        // dd($buses );

        return view("backend.content.dashboard",compact('users','bookings','sell','buses'));
    }
}
