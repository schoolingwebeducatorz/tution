<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subject extends Model
{
    use HasFactory;
    public function lessons(){
        return $this->hasMany(lesson::class);
    }
    public function grade(){
        return $this->hasMany(grade::class);
    }
    public function country(){
        return $this->belongsTo(country::class);
    }
}
