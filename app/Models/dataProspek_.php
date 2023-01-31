<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class dataProspek
{
    private static $dataProspek = [
        [
            "prospek" => "Asuransi Kebakaran",
            "perusahaan" => "PT. Asuransi Bintang, Tbk.",
            "tanggal" => "19 Januari 2023",
            "slug" => "on-progress",
            "name" => "Triska Saputri"
            
        ],
        [
            "prospek" => "Asuransi Perjalanan",
            "perusahaan" => "PT. Asuransi Perkasa, Tbk.",
            "tanggal" => "20 Januari 2023",
            "slug" => "on-progress",
            "name" => "Nadila Putri"
            
        ],
        [
            "prospek" => "Asuransi Properti",
            "perusahaan" => "PT. Sarotoga Migas, Tbk.",
            "tanggal" => "10 Januari 2023",
            "slug" => "validated",
            "name" => "Rio Andri"
        ],
        [
            "prospek" => "Asuransi Kebakaran",
            "perusahaan" => "Badan Usaha Milik Negara",
            "tanggal" => "08 Januari 2023",
            "slug" => "validated",
            "name" => "Rio Andri"
        ]
    ];
    public static function all(){
        return collect(self::$dataProspek);
    }
    public static function find($slug){
        $data = static::all();
        //untuk pengelompokkan data berdasarkan slug
        // $prospek = [];
        // foreach($data as $pr){
        //     if($pr["slug"] === $slug){
        //         $prospek = $pr;
        //     }
        // }
        $filtered = $data->where('slug' ,$slug);
        return $filtered->all();
    }
    // public static function all(){
    //     //karena static pake self kalo tidak pake this biasa
    //     return collect(self::$dataProspek);
    // }

    // public static function find($slug){
    //     $prospek = static::all();
    //     return $prospek->firstWhere('slug', $slug);
    // }
}
