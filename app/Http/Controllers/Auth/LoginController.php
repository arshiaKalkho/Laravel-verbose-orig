<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function __construct(){//only logged out(guest) users can login/register 
        $this->middleware(['guest']);
    }
    public function index(){
        return view('auth.login');
    }
    public function store(Request $request){
        $this->validate($request,[
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if(!auth()->attempt($request->only('email', 'password'), $request->remember)){
            return back()->with('status', 'invalid login detail');
        }
        //attempt login


        return redirect()->route('dashboard');
    }
}
