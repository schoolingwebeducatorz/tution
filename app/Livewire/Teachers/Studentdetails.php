<?php

namespace App\Livewire\Teachers;

use Livewire\Component;
use App\Models\enrollment;
use App\Models\assignment;
use Livewire\WithFileUploads;
use Auth;

class Studentdetails extends Component
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

    public function render()
    {
        $enrollment = $this->enrollment;
        $assignments = assignment::where('enrollment_id',$enrollment->id)->get();
        return view('livewire.teachers.studentdetails',compact('enrollment','assignments'));
    }
    // mount ..
    public function mount($id){
        $this->enrollment = enrollment::find($id);
    }
    protected $rules = [
        'title' => 'required',
        'marks' => 'required',
        'deadline' => 'required',
        'referencelink' => 'required'
    ];
    // save ..
    public function save(){
        $this->validate();
        $assignment = new assignment;
        $assignment->title = $this->title;
        $assignment->refernece = $this->referencelink;
        $assignment->marks = $this->marks;
        $assignment->date = $this->deadline;
        $assignment->enrollment_id = $this->enrollment->id;
        $assignment->trainer_id = Auth::user()->trainer->id;
        $assignment->save();
        $this->title = " ";
        $this->marks = " ";
        $this->deadline  = " ";
        $this->referencelink = " ";
        session()->flash('message','Assignment Published Succesfully');
        
    }
    public function delete($id){
        $enrollment = assignment::find($id);
        $enrollment->delete();
        session()->flash('delete','Assignment Deleted Succesfully');
    }
    // gain ..
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
