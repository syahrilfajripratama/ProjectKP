<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class loginController extends Controller
{
    public function index(){
        return view('index', [
            'title' => 'Login'
        ]);
    }
    public function authenticate(Request $request){
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/mhome');
        }
        return back()->with('failedLogin', 'Login Failed!');
    }
}
