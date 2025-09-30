<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class trainer extends Model
{
    use HasFactory;
    public function subject(){
        return $this->hasMany(subjecttrainer::class);
    }
    public function timetable(){
        return $this->hasMany(trainerschedule::class);
    }
    public function enrollments(){
        return $this->hasMany(enrollment::class);
    }
    public function assignments(){
        return $this->hasMany(assignment::class);
    }
}
