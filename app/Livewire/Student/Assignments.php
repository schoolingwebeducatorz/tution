<?php

namespace App\Livewire\Student;

use Livewire\Component;
use App\Models\assignment;
use Livewire\WithFileUploads;

class Assignments extends Component
{
    use WithFileUploads;

    public $type = 0;
    public $subtype;
    public $submissiont;

    public function render()
    {
        return view('livewire.student.assignments');
    }
    // submission type .
    public function submissiontype(){
        if($this->subtype == 1){
            $this->type = 1;
        } else if($this->subtype == 2){
            $this->type = 2;
        }
    }
        // gain ..
        public function gainmarks($id){
          //  dd($this->submissiont);
            // if type is 0 then its not and is 1 then pdf and if 2 then link ..
            $assignment = assignment::find($id);
            if($this->type == 1){
              //  dd($this->type);
                $validated = $this->validate([
                    'submissiont' => 'required',
                ]);
                
                $this->submissionaddress = time()."assignments".".".$this->submissiont->getClientOriginalExtension();
                $this->submissiont->storeAs('assignments', $this->submissionaddress, 'public');
                $assignment->submission = $this->submissionaddress;
                $assignment->subimssiont = $this->type;
                $assignment->save();
                $this->gain = " ";
                session()->flash('message','Assignment No #'.$assignment->id.' Has Been Closed Succesfully');
            } else if($this->type == 2){
                    //dd('test');
                    $assignment->submission = $this->submissiont;
                    $assignment->subimssiont = $this->type;
                    $assignment->save();
                    $this->gain = " ";
                session()->flash('message','Assignment No #'.$assignment->id.' Has Been Closed Succesfully');
            } else {
                session()->flash('delete','Please select type and submit assignment first');
            }
        }
}
