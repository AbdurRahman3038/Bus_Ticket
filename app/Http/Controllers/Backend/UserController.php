<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function loginForm()
    {
        return view('backend.content.login');
    }

    public function doLogin(Request $request)
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
            return redirect()->route('dashboard');
        }
        return back()->withErrors([
            'email' => 'Invalid Credentials.',
        ]);
    }


    public function logout()
    {
        Auth::logout();

        return redirect()->route('admin.login')->with('success','Logout Successful.');

    }
    public function displayUser()
    {
        $users=User::all();
        return view('backend.content.user', compact('users'));
    }
}
