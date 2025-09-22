<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class package extends Model
{
    use HasFactory;
    public function country(){
        return $this->belongsTo(country::class);
    }
    public function cpackage(){
        return $this->belongsTo(cpackage::class);
    }
}
