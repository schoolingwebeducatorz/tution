<?php

namespace App\Livewire\Admin\Subject;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\country;
use App\Models\subject;

class Create extends Component
{
    use WithFileUploads;

    public $image;
    public $title;
    public $code;
    public $description;
    public $country;


    public function render()
    {
        $countries = country::all();
        return view('livewire.admin.subject.create', compact('countries'));
    }
    protected $rules = [
        'title' => 'required',
        'description' => 'required',
        'image' => 'required',
        'country' => 'required'
    ];

    public function save(){
         $this->validate();
       //  dd($this->description);
       $string = $this->title;
       $expr = '/(?<=\s|^)\w/iu';
       preg_match_all($expr, $string, $matches);
       $result = implode('', $matches[0]);
       $result = strtoupper($result);
       $this->imgadress = str_replace(' ', '', $this->title)."-".time()."docs".".".$this->image->getClientOriginalExtension();
       $this->image->storeAs('subjects', $this->imgadress, 'public');

       $subject = new subject;
       $subject->title = $this->title;
       $subject->country_id = $this->country;
       $subject->code = $result;
       $subject->image = $this->imgadress;
       $subject->description = $this->description;
       $subject->save();
       session()->flash('message', 'Subject Added Succesully.');
       return redirect(route('subject.grade',$subject->id));
    }
}
