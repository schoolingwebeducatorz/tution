<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;
    // enrollment ..
    public function enrollment(){
        return $this->hasMany(enrollment::class);
    }
    // country ..
    public function country(){
        return $this->belongsTo(country::class);
    }
    // fee ..
    public function fee(){
        return $this->hasMany(fee::class);
    }
    // user ..
    public function user(){
        return $this->belongsTo(User::class);
    }

}
