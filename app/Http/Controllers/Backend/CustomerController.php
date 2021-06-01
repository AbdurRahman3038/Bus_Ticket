<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\User;
use App\Models\Trip;


class CustomerController extends Controller
{
    public function customer()
    {
        $customer=Customer::all();
        return view("backend.content.customer", compact('customer'));
    }
    public function create(Request $request)
    {
       Customer::create([
            'user_id'=>$request->user_id,
            'name'=>$request->name,
            'email'=>$request->address,
            'journey_date'=>$request->journey_date,
            'seat_number'=>$request->seat_number,
            'coach_type' =>$request->coach_type,
            'price' =>$request->coach_type
        ]);

        return redirect()->back();
    }

}
