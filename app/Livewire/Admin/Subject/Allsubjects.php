<?php

namespace App\Livewire\Admin\Subject;

use Livewire\Component;
use App\Models\country;

class Allsubjects extends Component
{
    public function render()
    {
        $countries = country::all();
        return view('livewire.admin.subject.allsubjects',compact('countries'));
    }

}
