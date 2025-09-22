<?php

namespace App\Livewire\Admin\Accounts;

use Livewire\Component;
use App\Models\student;

class Feestructure extends Component
{
    public $students;
    public function render()
    {
        $students = $this->students;
        return view('livewire.admin.accounts.feestructure',compact('students'));
    }
    // mount ..
    public function mount(){
        $this->students = student::orderby('id','desc')->get();
    }
}
