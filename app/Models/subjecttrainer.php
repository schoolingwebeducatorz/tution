<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subjecttrainer extends Model
{
    use HasFactory;
    public function trainersubject(){
        return $this->belongsTo(trainersubject::class);
    }
}
