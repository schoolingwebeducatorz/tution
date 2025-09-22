<?php

namespace App\Livewire\Admin\Packages;

use Livewire\Component;
use App\Models\country;
use App\Models\cpackage;

class Category extends Component
{
    
    public $title;
    public $country;

    public function render()
    {
        $countries = country::all();
        $packages = cpackage::all();
        return view('livewire.admin.packages.category',compact('countries','packages'));
    }
    protected $rules = [
        'title' => 'required',
        'country' => 'required'
    ];
    public function save(){
        $this->validate();
        $cpackage = new cpackage;
        $cpackage->title = $this->title;
        $cpackage->country_id = $this->country;
        $cpackage->save();
        $this->title = " ";
        $this->country = " ";
        session()->flash('message', 'Membership Group Added Succesully.');
    }
    public function delete($id){
        $package = cpackage::find($id);
        $package->delete();
        session()->flash('delete', 'Membership Deleted Succesully.');
    }
}
