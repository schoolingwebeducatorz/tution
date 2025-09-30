<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class trainerschedule extends Model
{
    use HasFactory;
    public function trainer(){
        return $this->belongsTo(trainer::class);
    }
    public function timeschedule()
    {
        return $this->belongsTo(\App\Models\timeschedule::class, 'timeschedule_id');
    }
}
