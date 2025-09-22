<?php

namespace App\Livewire\Admin\Subject\Grade;

use Livewire\Component;
use App\Models\grade;
use App\Models\subject;

class Years extends Component
{
    public $subject;
    public $title;
    
    public function render()
    {
        $grades = grade::where('subject_id',$this->subject->id)->get();
        return view('livewire.admin.subject.grade.years',compact('grades'));
    }

    public function mount($id){
        $this->subject = subject::find($id);
    }

    protected $rules  = [
        'title' => 'required'
    ];

    public function save(){
        $this->validate();
        $grade = new grade;
        $grade->title = $this->title;
        $grade->subject_id = $this->subject->id;
        $grade->save();
        session()->flash('message', 'Grade Is Added Succesully.');
    }
}
