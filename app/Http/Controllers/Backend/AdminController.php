<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;

class AdminController extends Controller
{
    public function admin()
    {
        $admin=Admin::all();
        return view("backend.content.admin", compact('admin'));
    }
    public function create(Request $request)
    {
       Admin::create([
            'name'=>$request->name,
            'description'=>$request->description
        ]);

        return redirect()->back();
    }

}
