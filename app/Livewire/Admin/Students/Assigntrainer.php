<?php

namespace App\Livewire\Admin\Students;

use Livewire\Component;
use App\Models\enrollment;
use App\Models\timetable;
use App\Models\day;
use App\Models\timeschedule;
use App\Models\trainerschedule;
use App\Models\enrollschedule;

class Assigntrainer extends Component
{
    public $enrollment;
    public $day;
    public $timeslot;
    public $slots = array();
    public $slot = [];
    public $trainers;
    public $timesh;

    public function render()
    {
        $enrollment = $this->enrollment;
        $days = day::all();
        $timeslots = timetable::all();
        $timesh = $this->timesh;
        return view('livewire.admin.students.assigntrainer',compact('enrollment','days','timeslots','timesh'));
    }
    public function mount($id){
        $this->enrollment = enrollment::find($id);
        $this->timesh = enrollschedule::where('enrollment_id',$id)->get();
    }
    protected $rules = [
        'day' => 'required',
        'timeslot' => 'required'
    ];
    // save ..
    public function save(){
        $this->Validate();
        $timesechdule = timeschedule::where('day_id',$this->day)->where('timetable_id',$this->timeslot)->first();
        $enrollschedule = new enrollschedule;
        $enrollschedule->enrollment_id = $this->enrollment->id;
        $enrollschedule->timeschedule_id = $timesechdule->id;
        $enrollschedule->save();
        $this->timesh = enrollschedule::where('enrollment_id',$this->enrollment->id)->get();
        
    }
    // slot ..
    public function find_trainer(){
        $test = enrollschedule::where('enrollment_id',$this->enrollment->id)->get();
        foreach($test as $value){
            array_push($this->slots,$value->timeschedule_id);
        }
        $this->trainers = trainerschedule::whereIn('timeschedule_id',$this->slots)->where('status', '=', 0)->get()->unique('trainer_id');
       // reset($this->slots);
       $this->slots = array();
    }
    // choose trainer ..
    public function choose($id){
        $test = enrollschedule::where('enrollment_id',$this->enrollment->id)->get();
        foreach($test as $value){
            array_push($this->slots,$value->timeschedule_id);
        }
        foreach ($this->slots as $key => $value) {
            # code...
            $trainerschedule = trainerschedule::where('timeschedule_id',$value)->where('trainer_id',$id)->first();
            $trainerschedule->status = 1;
            $trainerschedule->save();
        }
        $enrollment = enrollment::find($this->enrollment->id);
        $enrollment->trainer_id = $id;
        $enrollment->save();
        $this->enrollment = enrollment::find($this->enrollment->id);
        $this->slots = array();
        $this->trainers = null;
        session()->flash('message', 'Trainer Selected Succesfully.');
        
    }
    // delete ..
    public function delete($id){
        $time = enrollschedule::find($id);
        $time->delete();
        $this->timesh = enrollschedule::where('enrollment_id',$this->enrollment->id)->get();
        session()->flash('delete', 'Time Slot Deleted Succesfully.');
    }
    // enrolled schedule ..
    public function resetschedule($id){
        $enrollschedule = enrollschedule::where('enrollment_id',$this->enrollment->id)->get();
        foreach($enrollschedule as $value){
            array_push($this->slots,$value->timeschedule_id);
        }
        //dd($this->slots);
        foreach ($this->slots as $value) {
            # code...
            $trainerschedule = trainerschedule::where('timeschedule_id',$value)->where('trainer_id',$this->enrollment->trainer_id)->first();
            //dd($trainerschedule);
           $trainerschedule->status = 0;
           $trainerschedule->save();
        }

        foreach($enrollschedule as $schedule){
            $schedule->delete();
        }
        $enrollment = enrollment::find($id);
        $enrollment->trainer_id = null;
        $enrollment->save();
        $this->enrollment = enrollment::find($this->enrollment->id);
        $this->timesh = enrollschedule::where('enrollment_id',$this->enrollment->id)->get();
        session()->flash('message', 'Trainer schedule is reset succesfully.');
    }
}
