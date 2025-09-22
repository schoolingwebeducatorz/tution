<?php

namespace App\Livewire\Admin\Meetings;

use Livewire\Component;
use App\Models\day;
use App\Models\lecture;

class Create extends Component
{
    public $dbday;

    public function render()
    {
        
        $dbday = $this->dbday;
        $lecture = lecture::whereDate('lecturedate',date('d/m/y'))->get();
        return view('livewire.admin.meetings.create',compact('dbday','lecture'));
    }
    // mount ..
    public function mount(){
        $day = date("l");
        $this->dbday = day::where('day','like','%'.$day.'%')->first();
    }
    // generate ..
    public function generate(){
        foreach($this->dbday->slot as $slot){
            if($slot->enrollschedule->count()){
                foreach($slot->enrollschedule as $meeting){
                    $lecture = new lecture;
                    $lecture->enrollment_id = $meeting->enrollment_id;
                    $lecture->lecturedate = date("d/m/y");
                    $lecture->save();
                }
            }
        }
        session()->flash('message', 'Link Generated Succesfully  For Today');
    }
}
