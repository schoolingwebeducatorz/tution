<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class timeschedule extends Model
{
    use HasFactory;
    public function timetable(){
        return $this->belongsTo(timetable::class);
    }
    public function day(){
        return $this->belongsTo(day::class);
    }
    // trainer schedule ..
    public function trainerschedule(){
        return $this->hasMany(trainerschedule::class);
    }
    // enroll schedule ..
    public function enrollschedule(){
        return $this->hasMany(enrollschedule::class);
    }
}
