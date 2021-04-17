<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Route;
use App\Models\Trip;
use App\Models\Bus;

class HomepageController extends Controller
{
    public function homepage()
    {
        $busInfo=Bus::all();
        $tripInfo=Trip::all();
        $routeFrom = Route::all();
        return view("frontend.content.searchbox",compact('routeFrom','tripInfo','busInfo'));
    }

}
