<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use App\Models\dataProspek;

class dataProspek extends Model
{
    use HasFactory;
    // protected $fillable = ['perusahaan','client','prospek','keterangan'];
    protected $guarded = ['id'];

    public function jenisProspek(){
        return $this->belongsTo(jenisProspek::class, 'jenisProspek_id');
        // this->belongsTo(modelny, foreignkeyny, ownerkey)
    }
    public function marketer(){
        return $this->belongsTo(User::class, 'marketers_id');
    }

}
