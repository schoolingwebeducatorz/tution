<?php

namespace App\Livewire\Client;

use Livewire\Component;
use App\Models\country;
use App\Models\subject;

class Home extends Component
{
    public $country;
    public $subjects;
    public $countr;

    public function render()
    {
        $countries = country::all();
        $subjects  = $this->subjects;
        return view('livewire.client.home',compact('countries','subjects'))->layout('components.layouts.client');
    }
    public function mount(){
        $this->country = country::orderby('id','desc')->first();
        $this->subjects = subject::where('country_id',$this->country->id)->get();
    }
    public function subjectfind(){
        $this->subjects = subject::where('country_id',$this->countr)->get();
    }
}
