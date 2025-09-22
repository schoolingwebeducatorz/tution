<?php

namespace App\Livewire\Admin\Students;
use Illuminate\Support\Facades\Hash;

use Livewire\Component;
use App\Models\country;
use App\Models\subject;
use App\Models\student;
use App\Models\enrollment;
use App\Models\User;
use App\Models\fee;
use App\Models\grade;
use Carbon\Carbon;

class Admission extends Component
{
    public $n = 1;
    public $m = 0;
    public $name;
    public $email;
    public $whatsapp;
    public $gender;
    public $grade;
    public $admissiondate;
    public $ciaw;
    public $feeproccess;
    public $subjects = [];
    public $amount;
    public $subject;
    public $country;
    public $grades = [];

    public function render()
    {
        $countries = country::all();
        $subjects = $this->subjects;
        $grades = $this->grades;
        return view('livewire.admin.students.admission',compact('countries','subjects','grades'));
    }
    public function sub(){
        $this->subjects = subject::where('country_id',$this->country)->get();
    }

    public function gradeext(){
        $this->grades = grade::where('subject_id',$this->subject)->get();
    }

    public function mount(){

    }
    protected $rules = [
        'name' => 'required',
        'email' => 'required',
        'whatsapp' => 'required',
        'country' => 'required',
        'subject' => 'required',
        'gender' => 'required',
        'grade' => 'required',
        'amount' => 'required',
        'admissiondate' => 'required',
        'feeproccess' => 'required',
        'ciaw' => 'required'
    ];

    public function save(){
        $this->validate();
        // new students ..
        $student = new student;
        $student->name = $this->name;
        $student->email = $this->email;
        $student->whatsapp = $this->whatsapp;
        $student->gender = $this->gender;
        $student->country_id = $this->country;
        $student->save();
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

        // User ..
        $user = New User;
        $user->name = $this->name;
        $user->email = $this->email;
        $user->password = Hash::make('12344321');
        $user->is_student = 1;
        $user->save();
        $uid = $user->id;
        $enr = student::find($enrollment->student_id);
        $enr->user_id = $uid;
        $enr->save();
        session()->flash('message', 'Admission Confirmed Succesfully.');
        return redirect(route('feeproccess',$enrollment->id));


    }
}
