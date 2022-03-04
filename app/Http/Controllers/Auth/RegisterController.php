<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{   
    public function __construct(){//only logged out(guest) users can login/register 
        $this->middleware(['guest']);
    }



    public function index(){
        return view('auth.register');
    }
    public function store(Request $request){
        
        //validate mathod authomatically throws an exception 
        //if any of the fields are not abiding by the rules below
        // code after it will not run in case of exception
        $this->validate($request,[
            'name' => 'required|max:255',
            'username' => 'required|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|confirmed',
        ]);

        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),

        ]);
        //attempt login
        auth()->attempt($request->only('email', 'password'));//request body has all fields only get these two as array
        
        /*alternatively do this
        auth()->attempt([
            'email'   => $request->email,
            'password'=> $request->password,
        ])
        */

        return redirect()->route('dashboard');
    }
}
