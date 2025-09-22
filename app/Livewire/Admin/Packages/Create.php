<?php

namespace App\Livewire\Admin\Packages;

use Livewire\Component;
use App\Models\country;
use App\Models\subject;
use App\Models\facility;
use App\Models\cpackage;
use App\Models\package;

class Create extends Component
{
    public $country;
    public $memberships = [];
    public $s;
    public $n = 1;
    public $title;
    public $regularprice;
    public $discount;
    public $price;
    public $fac;
    
    public function render()
    {
        $countries = country::all();
        $facilities = facility::all();
        return view('livewire.admin.packages.create',compact('countries','facilities'));
    }
    protected $rules = [
        'country' => 'required',
        's' => 'required',
        'title' => 'required',
        'regularprice' => 'required',
        'discount' => 'required',
        'price' => 'required',
        'fac' => 'required'
    ];

    // subject ..
    public function membership(){
       $this->memberships = cpackage::where('country_id',$this->country)->get();
    }
    // inc .. 
    public function increment(){
        $this->n++;
    }
    public function decreament(){
        $this->n--;
    }
    // save ...
    public function save(){
        $this->validate();
        $package = new package;
        $package->country_id = $this->country;
        $package->cpackage_id = $this->s;
        $package->title = $this->title;
        $package->regularprice = $this->regularprice;
        $package->discount = $this->discount;
        $package->price = $this->price;
        $package->options = $this->fac;
        $package->save();
        $this->title = " ";
        $this->regularprice = " ";
        $this->discount = " ";
        $this->options = " ";
        $this->price = " ";
        $this->cpackage = " ";
        $this->country =" ";
        session()->flash('message', 'New Package Added Succesully.');
       // dd($this->fac);
    }
    // disocunt ..
    public function dis(){
        $this->price = $this->regularprice/100;
        $this->price = $this->price * $this->discount;
    }
    // delete ..
    public function delete($id){
        $package = package::find($id);
        $package->delete();
        session()->flash('delete', 'Package Deleted Succesully.');
    }
}
