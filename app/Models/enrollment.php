<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class enrollment extends Model
{
    use HasFactory;

    public function country(){
        return $this->belongsTo(country::class);
    }
    public function subject(){
        return $this->belongsTo(subject::class);
    }
    public function grade(){
        return $this->belongsTo(grade::class);
    }
    public function student(){
        return $this->belongsTo(student::class);
    }
    public function trainer(){
        return $this->belongsTo(trainer::class);
    }
    public function fee(){
        return $this->hasMany(fee::class);
    }
    public function enrollschedule(){
        return $this->hasMany(enrollschedule::class);
    }
    public function lectures(){
        return $this->hasMany(lecture::class);
    }
    public function assignments(){
        return $this->hasMany(assignment::class);
    }
}
