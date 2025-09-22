<?php

namespace App\Livewire\Admin\Trainers;

use Livewire\Component;
use App\Models\trainersubject;

class Subject extends Component
{
    public $title;

    public function render()
    {
        $subjects = trainersubject::all();
        return view('livewire.admin.trainers.subject',compact('subjects'));
    }
    protected $rules = [
        'title' => 'required'
    ];

    public function save(){
        $this->validate();
        $subject = new trainersubject;
        $subject->subject = $this->title;
        $subject->save();
        $this->title = " ";
        session()->flash('message', 'Subject Added Succesully.');
    }
    public function delete($id){
        $subject = trainersubject::find($id);
        $subject->delete();
        session()->flash('delete', 'Subject Deleted Succesully.');
    }
}
