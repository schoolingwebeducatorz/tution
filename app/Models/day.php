<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class day extends Model
{
    use HasFactory;
    public function slot(){
        return $this->hasMany(timeschedule::class);
    }
}
