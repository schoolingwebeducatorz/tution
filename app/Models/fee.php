<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fee extends Model
{
    use HasFactory;
    public function country(){
        return $this->belongsTo(country::class);
    }
    public function enrollment(){
        return $this->belongsTo(enrollment::class);
    }
    public function student(){
        return $this->belongsTo(student::class);
    }
}
