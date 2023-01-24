<?php

namespace App\Http\Controllers;

use App\Models\dataProspek;
use Illuminate\Http\Request;

class dataProspekController extends Controller
{
    public function marketing(){
        return view('marketing',[
            "title" => "Prospek",
            "prospek" => dataProspek::all()
        ]);
    }
    public function bm(){
        return view('bm',[
            "title" => "Prospek",
            "prospek" => dataProspek::all()
        ]);
    }
    public function showMarketing($slug){
        if ($slug == "on-progress") {
            return view('marketingOn-progress',[
                "title" => "Prospek",
                "prospek" => dataProspek::find($slug)
            ]);
        } else if ($slug == "validated"){
            return view('marketingvalidated',[
                "title" => "Prospek",
                "prospek" => dataProspek::find($slug)
            ]);
        } else if ($slug == "inputProspek"){
            return view('inputProspek',[
                "title" => "Prospek"
            ]);
        }
    }
    public function showBm($slug){
        if ($slug == "on-progress") {
            return view('bmon-progress',[
                "title" => "Prospek",
                "prospek" => dataProspek::find($slug)
            ]);
        } else if  ($slug == "validated"){
            return view('bmvalidated',[
                "title" => "Prospek",
                "prospek" => dataProspek::find($slug)
            ]);
        }
    }
}
