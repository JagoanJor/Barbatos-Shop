<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        return view('register');
    }

    public function create(Request $request){
        $createUser = $request->validate([
            'name' => 'required|min:5',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:8|alpha_num',
            'confirm_password' => 'required|same:password',
            'dateofbirth' => 'required|after:01-01-1900|before:today',
            'gender' => 'required',
            'country' => 'required'
        ]);

        $createUser['password'] = bcrypt($createUser['password']);

        User::create($createUser);

        return redirect('login')->with('success', 'Registration Success! Please Login');
    }
}
