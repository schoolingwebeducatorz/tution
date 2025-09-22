<?php

namespace App\Livewire\Admin\Packages;

use Livewire\Component;
use App\Models\facility;

class Facilities extends Component
{
    public $title;

    public function render()
    {
        $facilities = facility::all();
        return view('livewire.admin.packages.facilities',compact('facilities'));
    }
    protected $rules = [
        'title' => 'required',
    ];

    public function save(){
        $this->validate();
        $facility = new facility;
        $facility->title = $this->title;
        $facility->save();
        $this->title = " ";
        session()->flash('message', 'Facility Added Succesully.');
    }
    // delete ..
    public function delete($id){
        $facility = facility::find($id);
        $facility->delete();
        session()->flash('delete', 'Facility Delete Succesully.');
    }
}
