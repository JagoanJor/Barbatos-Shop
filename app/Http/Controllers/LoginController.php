<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }

    public function authenticate(Request $request)
    {
        // $credentials = $request->validate([
        //     'email' => ['required', 'email'],
        //     'password' => ['required'],
        // ]);
 
        // if (Auth::attempt($credentials)) {
        //     $request->session()->regenerate();
 
        //     return redirect()->intended('/');
        // }
 
        // return back()->with('failed', 'Login failed!');

        $this->validate($request, [
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (auth()->attempt($request->only(['email', 'password']), $request->remember)){
            $request->session()->regenerate();
            return redirect()->intended('/');
        };

        return back()->with('failed', 'Login failed!');
    }

    public function logout(){
        Auth::logout();
        return redirect('login')->with('success', 'Logout Success!');
    }
}
