<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;


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
            'name'=>$request->name,
            'address'=>$request->address
        ]);

        return redirect()->back();
    }

}
