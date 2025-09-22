<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\day;
use App\Models\timetable;
use App\Models\timeschedule;

class Slot extends Component
{
    public $start;
    public $end;
    public $day;

    public function render()
    {
        $slots = timetable::all();
        $days = day::all();
        return view('livewire.admin.slot', compact('slots','days'));
    }
    protected $rules = [
        'start' => 'required',
        'end' => 'required'
    ];
    // save day ..
    public function save_day(){
        $validated = $this->validate([ 
            'day' => 'required',
        ]);
        $time = timetable::all();
        // day ..
        $day = new day;
        $day->day = $this->day;
        $day->save();
        foreach($time as $time){
            $schedule = new timeschedule;
            $schedule->day_id = $day->id;
            $schedule->timetable_id = $time->id;
            $schedule->save();
            
        }
        $this->day =" ";
        session()->flash('message', 'New Day Slot Added Succesully.');
        foreach($time as $table){

        }
    }
    // save time ..
    public function save_time(){
        $this->validate();
        $time = new timetable;
        $time->start = $this->start;
        $time->end = $this->end;
        $time->save();
        $this->start= " ";
        $this->end = " ";
        session()->flash('message', 'New Time Slot Added Succesully.');
    }
    public function delete_slot($id){
        $time = timetable::find($id);
        $time->delete();
        session()->flash('delete', 'Time Slot Delete Succesully.');
    }
    public function delete_day($id){
        $day = day::find($id);
        $day->delete();
        $timetable = timeschedule::where('day_id',$id)->get();
        foreach($timetable as $time)    {
            $time->delete();
        }
        session()->flash('delete', 'Day Delete Succesully.');
    }
}
