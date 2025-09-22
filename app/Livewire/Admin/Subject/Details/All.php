<?php

namespace App\Livewire\Admin\Subject\Details;

use Livewire\Component;
use App\Models\subject;
use App\Models\country;

class All extends Component
{
    public $subjects;
    public $country;

    public function render()
    {
        $subjects = $this->subjects;
        return view('livewire.admin.subject.details.all',compact('subjects'));
    }
    public function mount($id){
        $this->country = country::find($id);
        $this->subjects = subject::where('country_id',$id)->get();
    }
    public function delete($id){
        $subject = subject::find($id);
        if(!empty($subject->grade)){
            foreach($subject->grade as $grade){
                if(!empty($subject->lesson)){
                    foreach($grade->lesson as $lesson){
                        $lesson->delete();
                    }
                }
                $grade->delete();
            }
        }
        $subject->delete();
        session()->flash('delete', 'Subject Deleted Succesfully.');
        $this->subjects = subject::where('country_id',$this->country->id)->get();
    }
}
