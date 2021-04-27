<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Trip;

class TripviewController extends Controller
{
    public function tripview(Request $request)
    {

        $tripview=Trip::all();
        return view('frontend.content.tripview', compact('tripview'));

    }


}
