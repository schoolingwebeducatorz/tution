<?php

namespace App\Livewire\Admin\Trainers;

use Livewire\Component;
use App\Models\trainer;

class Alltrainers extends Component
{
    public function render()
    {
        $trainers = trainer::orderby('id','desc')->get();
        return view('livewire.admin.trainers.alltrainers',compact('trainers'));
    }
}
