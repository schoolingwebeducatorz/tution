<?php

namespace App\Livewire\Client;

use Livewire\Component;
use App\Models\trailrequest;
use App\Models\grade;

class Trailclass extends Component
{
    public $name;
    public $email;
    public $whatsapp;
    public $country;
    public $grade;
    public $slots;
    public $rdate;
    public $years;
    
    public function render()
    {
        return view('livewire.client.trailclass')->layout('components.layouts.client');
    }
    protected $rules = [
        'name' => 'required',
        'email' => 'required',
        'whatsapp' => 'required',
        'country' => 'required',
        'grade' => 'required',
        'slots' => 'required',
        'rdate' => 'required'
    ];

    public function save(){
        $this->validate();
        $trail = new trailrequest;
        $trail->name = $this->name;
        $trail->email = $this->email;
        $trail->whatsapp = $this->whatsapp;
        $trail->country_id = $this->country;
        $trail->grade = $this->grade;
        $trail->timetable_id = $this->slots;
        $trail->traildate = $this->rdate;
        $trail->save();
        $this->name = " ";
        $this->email = " ";
        $this->whatsapp = " ";
        $this->country_id = " ";
        $this->grade = " ";
        $this->timetable_id = null;
        $this->traildate =" ";
        session()->flash('message', 'Thanks For Submitt Your Request of For Trail Class, Team will get in touch with you soon');
    }
}
