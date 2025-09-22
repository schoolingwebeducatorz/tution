<?php

namespace App\Livewire\Admin\General;

use Livewire\Component;
use App\Models\location;
use App\Models\country;
use Livewire\WithFileUploads;

class Locations extends Component
{
    use WithFileUploads;
    
    public $country;
    public $whatsapp;
    public $photo;
    public $imgadress;
    public $email;

    public $newemail;
    public $newphoto;
    public $newwhatsapp;
    public $newcountry;

    public function render()
    {
        $countries = location::all();
        $locations   = country::orderby('id','desc')->get();
    //    dd($locations);
        return view('livewire.admin.general.locations', compact('countries','locations'));
    }
    protected $rules = [
        'country' => 'required',
        'whatsapp' => 'required',
        'email' => 'required',
    ];

    public function save(){
        $this->validate();
        $country = location::find($this->country);
        $c = country::where('location_id',$this->country)->first();
        if(!empty($c)){
            return redirect()->back()->with('error','This Country Is Already Existing');
        } else {
            $this->imgadress = time()."flag".".".$this->photo->getClientOriginalExtension();
            $this->photo->storeAs('country', $this->imgadress, 'public');

            $count = new country;
            $count->country_id = $this->country;
            $count->photo = $this->imgadress;
            $count->whatsapp = $this->whatsapp;
            $count->email = $this->email;
            $count->location_id = $country->id;
            $count->save();
        }
        $this->country = " ";
        $this->whatsapp = " ";
        $this->email = " ";
        session()->flash('message', 'Country Added Succesully.');
    }
    public function delete($id){
        $country = country::find($id);
        $country->delete();

        session()->flash('delete', 'Country Deleted Succesully.');

    }
    public function update($id){
       // dd($id);
       
       $count = country::find($id);
       if(!empty($this->newphoto)){
            $this->imgadress = time()."flag".".".$this->photo->getClientOriginalExtension();
            $this->newphoto->storeAs('country', $this->imgadress, 'public');
            $count->photo = $this->imgadress;
       }
       if(!empty($this->newcountry)){
            $count->country_id = $this->newcountry;
       }
       if(!empty($this->newwhatsapp)){
            $count->whatsapp = $this->newwhatsapp;
       }
       if(!empty($this->newemail)){
            $count->email = $this->newemail;
        }
        if(!empty($this->newcountry)){
            $count->location_id = $this->newcountry;
        }
        $count->save();
        session()->flash('message', 'Country Updated Succesully.');
    }   
}
