<?php

namespace App\Livewire\Client;

use Livewire\Component;
use App\Models\subject;

class Subjectdetails extends Component
{
    public $subject;

    public function render()
    {
        $subject = $this->subject;
        return view('livewire.client.subjectdetails',compact('subject'))->layout('components.layouts.client');
    }
    public function mount($id){
        $this->subject = subject::find($id);
    }
}
