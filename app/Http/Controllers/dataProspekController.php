<?php

namespace App\Http\Controllers;

use App\Models\dataProspek;
use Illuminate\Http\Request;

class dataProspekController extends Controller
{
    public function showDataProgress(){
        return view('mProgress',[
            "title" => "Prospek",
            "dataProspek" => dataProspek::all()
        ]);
    }
    public function showDataValidated(){
        return view('mValidated',[
            "title" => "Prospek",
            "dataProspek" => dataProspek::all()
        ]);
    }
}
