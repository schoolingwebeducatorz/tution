<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cpackage extends Model
{
    use HasFactory;
    public function country(){
        return $this->belongsTo(country::class);
    }
    public function package(){
        return $this->hasMany(package::class);
    }
}
