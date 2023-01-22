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
        ],
        [
            "prospek" => "Asuransi Properti",
            "perusahaan" => "PT. Sarotoga Migas, Tbk.",
            "tanggal" => "10 Januari 2023",
            "slug" => "validated",
        ]
    ];

    public static function all(){
        //karena static pake self kalo tidak pake this biasa
        return collect(self::$dataProspek);
    }
}
