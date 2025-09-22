<?php

namespace App\Livewire\Admin\Students;

use Livewire\Component;
use App\Models\student;
use App\Models\fee;
use Carbon\carbon;
use App\Models\enrollment;

class Pay extends Component
{
    public $student;
    public $method;
    public $lastday;

    public function render()
    {
        $student = $this->student;
       // dd($student->fee);
        return view('livewire.admin.students.pay',compact('student'));
    }
    // student ..
    public function mount($id){
        $this->student = enrollment::find($id);
    }
    protected $rules = [
        'method' => 'required',
        'lastday' => 'required'
    ];
    // paid ..
    public function paid($id){
        $this->validate();
        $fee = fee::find($id);
        $enrollment = enrollment::find($fee->enrollment_id);
        $fee->method = $this->method;
        $fee->last_date = $this->lastday;
        $fee->status = "paid";
        $fee->save();
        $fee_no = $fee->no;
        if($fee_no == 1){
            $fee_no = $fee_no + 1;
            $feenew = new fee;
            $feenew->student_id = $fee->student_id;
            $feenew->no = $fee_no;
            $feenew->enrollment_id = $fee->enrollment_id;
            $feenew->amount = $enrollment->amount;
            $feenew->last_date = $enrollment->feeproccess;
            $feenew->country_id = $fee->country_id;
            $feenew->save();
            $enrollment->status = 1;
            $enrollment->save();
        } else {
            $date = Carbon::createFromFormat('m/d/Y',Carbon::parse($enrollment->feeproccess)->format('m/d/Y'))->addMonths(1);
            $enrollment->feeproccess = $date;
            $enrollment->save();
            $fee_no = $fee_no + 1;
            // // fee ..
            $feenew = new fee;
            $feenew->student_id = $fee->student_id;
            $feenew->no = $fee_no;
            $feenew->enrollment_id = $fee->enrollment_id;
            $feenew->amount = $enrollment->amount;
            $feenew->last_date = $date;
            $feenew->country_id = $fee->country_id;
            $feenew->save();
        }
        $this->method = " ";
        $this->last_date = " ";
        if($fee_no == 2){
            return redirect(route('assign.trainer',$enrollment->id));
        } else {
            session()->flash('message', 'Fee Paid Succesully! Next Date of fee submission is '.$date);
        }
    }
    public function update($id){
        $validated = $this->validate([ 
            'lastday' => 'required',
        ]);
        $fee = fee::find($id);
        // dd($fee);
        $fee->last_date = $this->lastday;
        $fee->save();
        session()->flash('message', 'Fee Last Date Extended Succesully.');
    }
}
