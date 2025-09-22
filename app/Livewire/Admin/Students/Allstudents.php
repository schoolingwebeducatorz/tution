<?php

namespace App\Livewire\Admin\Students;

use Livewire\Component;
use App\Models\student;
use App\Models\country;
use App\Models\enrollschedule;
use App\Models\trainerschedule;

class Allstudents extends Component
{
    public $students;

    public function render()
    {
        $students = $this->students;
        $countries = country::all();
        return view('livewire.admin.students.allstudents',compact('students','countries'));
    }
    public function mount(){
        $this->students = student::orderby('id','desc')->get();
    }
    public function getstu(){
        $this->students = student::orderby('id','desc')->get(); 
    }
    public function country($id){
        $this->students = student::where('country_id',$id)->get();
    }
    // delete ..
    public function delete($id){
        //dd("deleted");
        $student = student::find($id);
        $student->enrollment;
        $student->fee;
        if(!empty($student->enrollment)){
            foreach ($student->enrollment as $enrollment) {
                # code...
                $enrollment->delete();
                $enrollschedule = enrollschedule::where('enrollment_id',$enrollment->id)->get();
                foreach($enrollschedule as $schedule){
                    $trainerschedule = trainerschedule::where('timeschedule_id',$schedule->timeschedule_id)->first();
                    $trainerschedule->status = 0;
                    $trainerschedule->save();
                    $schedule->delete();
                }
            }
        }
        if(!empty($student->fee)){
            foreach ($student->fee as $fee) {
                # code...
                $fee->delete();
            }
        }
        if(!empty($student->user)){
            # code...
            $student->user->delete();
        }
        $student->delete();
        $this->students = student::orderby('id','desc')->get();

        session()->flash('delete', 'Student Deleted Succfesully');
    }
}
