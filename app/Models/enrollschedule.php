<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class enrollschedule extends Model
{
    use HasFactory;
    public function timeschedule(){
        return $this->belongsTo(timeschedule::class);
    }
    public function enrollment(){
        return $this->belongsTo(enrollment::class);
    }
}
