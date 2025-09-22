<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class grade extends Model
{
    use HasFactory;

    public function enrollment(){
        return $this->hasMany(enrollment::class);
    } 
    public function lesson(){
        return $this->hasMany(lesson::class);
    }
}
