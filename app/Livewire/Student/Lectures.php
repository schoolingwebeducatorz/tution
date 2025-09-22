<?php

namespace App\Livewire\Student;

use Livewire\Component;
use App\Models\lecture;

class Lectures extends Component
{
    public $lectures;
    public $lecture;

    public function render()
    {
        $lectures = $this->lectures;
        $lecture  = $this->lecture;
        //dd($lecture);
        return view('livewire.student.lectures',compact('lectures','lecture'));
    }
    // mount ..
    public function mount($id){
        $this->lectures = lecture::where('enrollment_id',$id)->orderby('id','desc')->get();
        $this->lecture = lecture::where('enrollment_id',$id)->orderby('id','desc')->first();

    }
    // lecture ..
    public function clecture($id){
        $this->lecture = lecture::find($id);
    }
}
