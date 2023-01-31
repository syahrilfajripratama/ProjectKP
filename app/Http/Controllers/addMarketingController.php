<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class addMarketingController extends Controller
{
    public function index(){
        return view('addmarketing', [
            'title' => 'Add Marketing'
        ]);
    }
    public function store(Request $request ){
        $newMarketer = $request->validate([
            'name' => 'required',
            'username' => 'required|min:4|max:9|unique:users',
            'email' => 'required|email:dns|unique:users',
            'nip' => 'required|min:8|unique:users',
            'password' => 'required|min:4|max:255'
        ]);
        $newMarketer['password'] = bcrypt($newMarketer['password']);

        User::create($newMarketer);
        
        // $request->session()->flash('success', 'Marketing baru telah ditambahkan!');

        return redirect('addmarketing')->with('success', 'Marketing baru telah ditambahkan!');
    }
}
