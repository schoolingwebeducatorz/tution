<?php

namespace App\Livewire\Teachers;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\assignment;
use Auth;

class Assignments extends Component
{
    use WithFileUploads;

    public $enrollment;
    public $referencelink;
    public $title;
    public $deadline;
    public $marks;
    public $gain;
    public $subtype;
    public $type = 0;
    public $submissiont;
    public $submissionaddress;
    public $assignments;
    public function render()
    {
        return view('livewire.teachers.assignments');
    }
    public function mount(){
        $this->assignments = Auth::user()->trainer->assignments;
       // dd($this->assignments);
    }
    public function gainmarks($id){
        $validated = $this->validate([
            'gain' => 'required',
        ]);
        // if type is 0 then its not and is 1 then pdf and if 2 then link ..
        $assignment = assignment::find($id);
        if($this->type == 1){
            $validated = $this->validate([
                'submissiont' => 'required',
            ]);
            
            $this->submissionaddress = time()."assignments".".".$this->submissiont->getClientOriginalExtension();
            $this->submissiont->storeAs('assignments', $this->submissionaddress, 'public');
            $assignment->submission = $this->submissionaddress;
            $assignment->subimssiont = $this->type;
            $assignment->gain = $this->gain;
            $assignment->status = 1;
            $assignment->save();
            $this->gain = " ";
            session()->flash('message','Assignment No #'.$assignment->id.' Has Been Closed Succesfully');
        } else if($this->type == 2){
                $assignment->submission = $this->submissiont;
                $assignment->subimssiont = $this->type;
                $assignment->gain = $this->gain;
                 $assignment->status = 1;
                $assignment->save();
                $this->gain = " ";
                session()->flash('message','Assignment No #'.$assignment->id.' Has Been Closed Succesfully');
        } else {
            session()->flash('delete','Please select type and submit assignment first');
        }
    }
    // submission type .
    public function submissiontype(){
        if($this->subtype == 1){
            $this->type = 1;
        } else if($this->subtype == 2){
            $this->type = 2;
        }
    }
}   
