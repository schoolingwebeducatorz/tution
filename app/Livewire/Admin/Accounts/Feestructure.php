<?php

namespace App\Livewire\Admin\Accounts;

use App\Models\enrollment;
use Livewire\Component;
use App\Models\student;

class Feestructure extends Component
{
    public $students;
    public function render()
    {
        $students = $this->students;
        //dd($students);
        return view('livewire.admin.accounts.feestructure',compact('students'));
    }
    // mount ..
    public function mount(){
        $this->students = enrollment::orderby('id','desc')->get();
    }
}
