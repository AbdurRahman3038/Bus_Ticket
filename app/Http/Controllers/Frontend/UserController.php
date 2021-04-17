<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Route;
use App\Models\Trip;
use App\Models\Bus;


class UserController extends Controller
{
    public function showLoginRegistration()
    {
        $busInfo=Bus::all();
        $tripInfo=Trip::all();
        $routeFrom = Route::all();
        return view('frontend.content.login-registration',compact('routeFrom','tripInfo','busInfo'));

    }
}
