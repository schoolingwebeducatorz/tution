<?php

namespace App\Livewire\Admin\Trainers;

use Livewire\Component;
use App\Models\trainer;
use App\Models\day;
use App\Models\timetable;

class Profile extends Component
{
    public $trainer;

    public function render()
    {
        $trainer = $this->trainer;
        $days  = day::all();
        $slots = timetable::all();
        return view('livewire.admin.trainers.profile',compact('trainer','days','slots'));
    }
    public function mount($id){
        $this->trainer = trainer::find($id);
    }
}
