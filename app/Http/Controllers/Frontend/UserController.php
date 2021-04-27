<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Location;
use App\Models\Trip;
use App\Models\Bus;
use App\Models\User;


class UserController extends Controller
{
    public function showLoginRegistration()
    {
        $busInfo=Bus::all();
        $tripInfo=Trip::all();
        $locationFrom = Location::all();
        return view('frontend.content.login-registration',compact('locationFrom','tripInfo','busInfo'));

    }

    public function registration(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'email|required|unique:users',
            'password'=>'required|min:6'
        ]);

        User::create([
        'name'=>$request->name,
        // 'contract'=>$request->contract,
        'email'=>$request->email,
        'password'=>bcrypt($request->password)
        ]);

        return redirect()->back()->with('success','User Registration Successful.');
    }

    public function login(Request $request)
    {
//        dd($request->all());
//validate input
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:6'
        ]);

        //authenticate
        $credentials = $request->only('email', 'password');
//        dd($credentials);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('homepage');
        }
        return back()->withErrors([
            'email' => 'Invalid Credentials.',
        ]);
     }

     public function logout()
     {
         Auth::logout();

         return redirect()->route('login.registration.form')->with('success','Logout Successful.');

     }

}
