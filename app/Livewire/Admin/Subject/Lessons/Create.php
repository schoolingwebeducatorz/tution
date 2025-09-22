<?php

namespace App\Livewire\Admin\Subject\Lessons;

use Livewire\Component;
use App\Models\lesson;
use App\Models\grade;

class Create extends Component
{
    public $grade;
    public $title;
    public $lessons;

    public function render()
    {
        $grade = $this->grade;
        $lessons = $this->lessons;
        return view('livewire.admin.subject.lessons.create',compact('grade','lessons'));
    }

    public function mount($id){
        $this->grade = grade::find($id);
        $this->lessons = lesson::where('grade_id',$this->grade->id)->orderby('id','desc')->get(); 
    }

    protected $rules = [
        'title' => 'required'
    ];

    public function save(){
        $this->validate();
        $lesson = new lesson;
        $lesson->title = $this->title;
        $lesson->grade_id = $this->grade->id;
        $lesson->subject_id = $this->grade->subject_id;
        $lesson->save();
        $this->title = " ";
        $this->lessons = lesson::where('grade_id',$this->grade->id)->orderby('id','desc')->get(); 
    }
    public function delete($id){
        $lesson = lesson::find($id);
        $lesson->delete();
        session()->flash('message', 'New Lesson Added Succesully.');
    }
}
