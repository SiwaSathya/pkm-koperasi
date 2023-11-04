<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Koperasi extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function users(){
        return $this->belongsTo('App\Models\User', 'user_id');
    }

    public function pelaporan(){
    	return $this->hasMany('App\Models\Pelaporan');
    }
}
