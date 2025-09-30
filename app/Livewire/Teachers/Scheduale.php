<?php

namespace App\Livewire\Teachers;

use Livewire\Component;
use App\Models\trainer;
use Illuminate\Support\Facades\Auth;
use App\Models\Day;
use App\Models\Timetable;

class Scheduale extends Component
{
    public $trainer;

    public function mount()
    {
        $this->trainer = Auth::user()->trainer()->with([
            'timetable.timeschedule.timetable',
            'timetable.timeschedule.day',
            'timetable.timeschedule.enrollschedule.enrollment.student',
        ])->first();
    }

    public function render()
    {
        $days = Day::all();
        $timeSlots = Timetable::all();

        return view('livewire.teachers.scheduale', [
            'days' => $days,
            'timeSlots' => $timeSlots,
            'trainer' => $this->trainer,
        ]);
    }
}
