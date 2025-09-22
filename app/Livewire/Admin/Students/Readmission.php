<?php

namespace App\Livewire\Admin\Students;

use Livewire\Component;
use App\Models\country;
use App\Models\student;
use App\Models\grade;
use App\Models\subject;
use App\Models\enrollment;
use Carbon\carbon;
use App\Models\fee;

class Readmission extends Component
{
    public $country;
    public $students = [];
    public $student;
    public $grades = [];
    public $subjects = [];
    public $subject;
    public $grade;
    public $admissiondate;
    public $ciaw;
    public $feeproccess;
    public $amount;

    public function render()
    {
        $countries = country::all();
        $students  = $this->students;
        $subjects = $this->subjects;
        $grades = $this->grades;
        return view('livewire.admin.students.readmission',compact('countries','students'));
    }
    public function cstudents(){
        $this->students = student::where('country_id',$this->country)->get();
        $this->subjects = subject::where('country_id',$this->country)->get();
    }
    public function sub(){
        $this->subjects = subject::where('country_id',$this->country)->get();
    }

    public function gradeext(){
        $this->grades = grade::where('subject_id',$this->subject)->get();
    }

    protected $rules = [

        'subject' => 'required',
        'amount' => 'required',
        'admissiondate' => 'required',
        'feeproccess' => 'required',
        'ciaw' => 'required'
    ];

    public function save(){
        $this->validate();
        // new students ..
        $student = student::find($this->student);
        // new enrollment ..
        $enrollment = new enrollment;
        $enrollment->student_id = $student->id;
        $enrollment->subject_id = $this->subject;
        $enrollment->grade_id = $this->grade;
        $enrollment->amount = $this->amount;
        $enrollment->country_id = $this->country;
        $enrollment->ciaw = $this->ciaw;
        $enrollment->admissiondate = $this->admissiondate;
        $enrollment->feeproccess = $this->feeproccess;
        $enrollment->save();
        // calculation ..
        $to = Carbon::createFromFormat('Y-m-d', $this->feeproccess);
        $from = Carbon::createFromFormat('Y-m-d', $this->admissiondate);
        $diff_in_days = $to->diffInDays($from);
        if($diff_in_days != 0){
            $n = $this->amount/30;
            $n = round($n * $diff_in_days);
        } else {
            $n = $this->amount;
        }
        // fee ..
        $fee = new fee;
        $fee->student_id = $student->id;
        $fee->enrollment_id = $enrollment->id;
        $fee->no = 1;
        $fee->amount = $n;
        $fee->last_date = $this->admissiondate;
        $fee->feeproccessdate = $this->feeproccess;
        $fee->country_id = $this->country;
        $fee->last_date = $this->admissiondate;
        $fee->save();

        session()->flash('message', 'Admission Confirmed Succesfully.');
        return redirect(route('feeproccess',$enrollment->id));


    }
}
