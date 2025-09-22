<?php

namespace App\Livewire\Admin\Students;

use Livewire\Component;
use App\Models\student;
use App\Models\enrollment;

class Profile extends Component
{
    public $student;

    public function render()
    {
        $student = $this->student;
        return view('livewire.admin.students.profile',compact('student'));
    }
    public function mount($id){
        $this->student = student::find($id);
    }
    public function disable($id){
        $enrollment = enrollment::find($id);
        $enrollment->status = 0;
        $enrollment->save();
        session()->flash('delete', 'Enrollment is disabled Succesfully.');
    }
    public function enable($id){
        $enrollment = enrollment::find($id);
        $enrollment->status = 1;
        $enrollment->save();
        session()->flash('message', 'Enrollment is endable Succesfully.');
    }
    public function delete($id){
        $enrollment = enrollment::find($id);
        foreach($enrollment->lectures as $lecture){
            $lecture->delete();
        }
        $enrollment->delete();
        session()->flash('delete', 'Enrollment is Deleted Succesfully.');
    }
}
