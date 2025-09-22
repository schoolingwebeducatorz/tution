<?php

namespace App\Livewire\Admin\Subject\Details;

use Livewire\Component;
use App\Models\lesson;
use App\Models\subject;

class Detail extends Component
{
    public $subject;
    //public $lessons;

    public function render()
    {
        $lessons = $this->lessons;
        $subject = $this->subject;
        return view('livewire.admin.subject.details.detail', compact('lessons','subject'));
    }

    public function mount($id){
        $this->subject = subject::find($id);
        $this->lessons = $this->subject->lessons;
    }
}
