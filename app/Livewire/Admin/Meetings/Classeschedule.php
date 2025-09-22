<?php

namespace App\Livewire\Admin\Meetings;

use Livewire\Component;
use App\Models\day;
use App\Models\timetable;

class Classeschedule extends Component
{
    public function render()
    {
        $days = day::all();
        $slots = timetable::all();
        return view('livewire.admin.meetings.classeschedule',compact('days','slots'));
    }
}
