<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class LoginController extends Controller
{
    public function login()
    {
        if (Auth::check()) {
            return view('login');
        }else{
            return view('login');
        }
    }

    public function actionlogin(Request $request)
    {
        $data = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];

        if (Auth::Attempt($data)) {
            if (Auth::user()->is_admin === 1){
                return redirect('bmhome');
            }
            return redirect('mhome');
        }else{
            return back()->with('failedLogin', 'Login Failed!');
        }
    }
    public function actionlogout()
    {
        Auth::logout();
        return redirect('/');
    }
}
// class loginController extends Controller
// {
//     public function index(){
//         return view('index', [
//             'title' => 'Login'
//         ]);
//     }
//     public function authenticate(Request $request){
//         $credentials = $request->validate([
//             'email' => 'required|email:dns',
//             'password' => 'required'
//         ]);

//         if (Auth::attempt($credentials)) {
//             $request->session()->regenerate();
//             return redirect()->intended('/mhome');
//         }
//         return back()->with('failedLogin', 'Login Failed!');
//     }
// }
