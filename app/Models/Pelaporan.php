<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelaporan extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function periode(){
        return $this->belongsTo('App\Models\Periode', 'periode_id');
    }

    public function koperasi(){
        return $this->belongsTo('App\Models\Koperasi', 'koperasi_id');
    }
}
