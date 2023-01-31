<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\dataProspek;
use App\Models\jenisProspek;
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
    public function store(Request $request){
        $newData = $request->validate([
            'perusahaan' => 'required',
            'client' => 'required',
            'tanggal' => 'required',
            'waktu' => 'required',
            'jenisProspek_id' => 'required',
            'keterangan' => 'required'
        ]);
        dataProspek::create($newData);

        return redirect('/marketing/inputProspek')->with('success', 'Prospek baru telah ditambahkan!');
    }
    public function showMarketing($slug){
        if ($slug == "on-progress") {
                return view('marketingOn-progress',[
                    "title" => "Prospek",
                    "prospek" => dataProspek::where('is_validated' ,0)->get()
                ]);
            } else if ($slug == "validated"){
                return view('marketingvalidated',[
                    "title" => "Prospek",
                    "prospek" => dataProspek::where('is_validated' ,0)->get()
                ]);
            } else if ($slug == "inputProspek"){
                return view('inputProspek',[
                    "title" => "Prospek",
                    "prospek" => jenisProspek::all()
                ]);
            } else if ($slug == "Profile"){
                $data = User::all();
                $filtered = $data->where('is_admin' ,0);
                return view('marketingProfile',[
                    "title" => "Profile",
                    "profile" => $filtered->first()
                ]);
            }
    }
    public function showBm($slug){
        if ($slug == "on-progress") {
            return view('bmon-progress',[
                "title" => "Prospek",
                "prospek" => dataProspek::where('is_validated' ,0)->get()
            ]);
        } else if  ($slug == "validated"){
            return view('bmvalidated',[
                "title" => "Prospek",
                "prospek" => dataProspek::where('is_validated', 1)->get()
            ]);
        } else if ($slug == "Profile"){
            $data = User::all();
            $filtered = $data->where('is_admin' ,1);
            return view('bmProfile',[
                "title" => "Profile",
                "profile" => $filtered->first()
            ]);
        }
    }
}
