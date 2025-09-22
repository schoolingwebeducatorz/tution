<?php

namespace App\Livewire\Admin\Accounts;

use Livewire\Component;
use App\Models\fee;
use App\Models\country;
use App\Models\enrollment;
use Carbon\carbon;

class Monthfee extends Component
{
    public $fees;
    public $countries;
    public $method;
    public $lastday;
    public $feesum = null;
    public $location = null;

    public function render()
    {
        $fees = $this->fees;
        $countries = $this->countries;
        return view('livewire.admin.accounts.monthfee',compact('fees','countries'));
    }
    public function mount(){
        $this->fees = fee::where('status','unpaid')->whereMonth('last_date', Carbon::now()->month)->get();
        $this->countries = country::all();
    }
    // country ..
    public function  country($id){
        $this->fees = fee::where('status','unpaid')->whereMonth('last_date', Carbon::now()->month)->where('country_id',$id)->get();
        $this->location = country::find($id);
        $this->feesum = fee::where('status','unpaid')->whereMonth('last_date', Carbon::now()->month)->where('country_id',$id)->sum('amount');
    }
    // all fees ..
    public function getstu(){
        $this->fees = fee::where('status','unpaid')->whereMonth('last_date', Carbon::now()->month)->get();
        $this->feesum = null;
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
        $this->fees = fee::where('status','unpaid')->whereMonth('last_date', Carbon::now()->month)->get();
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
        $this->fees = fee::where('status','unpaid')->whereMonth('last_date', Carbon::now()->month)->get();
        session()->flash('message', 'Fee Last Date Extended Succesully.');
    }
}
