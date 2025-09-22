<?php

namespace App\Livewire\Client;

use Livewire\Component;
use App\Models\subject;

class Subjects extends Component
{
    public $subjects;
    public function render()
    {
        $subjects = $this->subjects;
        return view('livewire.client.subjects')->layout('components.layouts.client');
    }

    public function mount($id){
        $this->subjects = subject::where('country_id',$id)->get();
    }
}
