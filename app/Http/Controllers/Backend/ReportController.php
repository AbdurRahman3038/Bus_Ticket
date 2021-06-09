<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Booking;


class ReportController extends Controller
{
    public function report()
    {
        $bookings =Booking::with(['trip', 'userDetails'])->get();


            // $fromDate = date('Y-m-d',strtotime($_GET['from_date']));
            // $toDate = date('Y-m-d',strtotime($_GET['to_date']));

            $fromDate = isset($_GET['from_date']) ? $_GET['from_date'] : Carbon::today()->format('Y-m-d');
            $toDate = isset($_GET['to_date']) ? $_GET['to_date'] : Carbon::today()->format('Y-m-d');
            $bookings =Booking::with(['trip', 'userDetails'])->whereBetween('date',[$fromDate,$toDate])->get();





        return view('backend.content.report',compact('bookings','fromDate','toDate'));
    }


}
