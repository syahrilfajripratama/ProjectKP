<?php

namespace App\Http\Controllers;

use App\Models\note;
use Illuminate\Http\Request;

class noteController extends Controller
{
    public function store(Request $request){
        $newNote = $request->validate([
            'note' => 'required',
            'dataProspek_id' => 'required'
        ]);
        note::create($newNote);
        return redirect('/branchManager/on-progress')->with('success', 'Catatan Telah Disampaikan!');
    }
}
