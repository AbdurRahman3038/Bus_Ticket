<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Location;
use App\Models\Trip;
use App\Models\Bus;

class HomepageController extends Controller
{
    public function homepage()
    {
        $busInfo=Bus::all();
        $tripInfo=Trip::all();
        $locationFrom = Location::all();
        return view("frontend.content.searchbox",compact('locationFrom','tripInfo','busInfo'));
    }


}
