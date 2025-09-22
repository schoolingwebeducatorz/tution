<?php

namespace App\Livewire\Admin\Trainers;

use Livewire\Component;
use Illuminate\Support\Facades\Hash;
use Livewire\WithFileUploads;   
use App\Models\trainersubject;
use App\Models\trainer;
use App\Models\subjecttrainer;
use App\Models\day;
use App\Models\timetable;
use App\Models\trainerschedule;
use App\Models\timeschedule;
use App\Models\User;

class Create extends Component
{
    use WithFileUploads;

    public $name;
    public $email;
    public $whatsapp;
    public $address;
    public $img;
    public $salary;
    public $gender;
    public $subjects;
    public $imgaddress;
    public $subject = [];
    public function render()
    {
        $subjects = $this->subjects;
        return view('livewire.admin.trainers.create',compact('subjects'));
    }
    public function mount(){
        $this->subjects = trainersubject::all();
    }
    protected $rules = [
        'name' => 'required',
        'email' => 'required|unique:trainers',
        'whatsapp' => 'required|unique:trainers',
        'address' => 'required',
        'img' => 'required'
    ];
    // save ..
    public function save(){
        $this->validate();
        $n = sizeof($this->subject);
      //  dd($this->img->getClientOriginalExtension());
        //dd($this->subject);
        if($n > 0){
           // dd($this->img->getClientOriginalExtension());
            $this->imgaddress = str_replace(' ', '', $this->name)."-".time()."profile".".".$this->img->getClientOriginalExtension();
            $this->img->storeAs('trainer', $this->imgaddress, 'public');
            $trainer = new trainer;
            $trainer->name = $this->name;
            $trainer->email = $this->email;
            $trainer->whatsapp = $this->whatsapp;
            $trainer->address = $this->address;
            $trainer->gender = $this->gender;
            $trainer->img = $this->imgaddress;
            $trainer->save();
            $trainer_id = $trainer->id;
          //  dd($this->subject);
            foreach($this->subject as $index => $sub){
                $subjecttrainer = new subjecttrainer;
                $subjecttrainer->trainer_id = $trainer_id;
                $subjecttrainer->trainersubject_id = $index;
                $subjecttrainer->save();
            }
            $user = new User;
            $user->name = $this->name;
            $user->email = $this->email;
            $user->password = Hash::make("12344321");
            $user->is_trainer = 1;
            $user->save();
            $teacher = trainer::find($trainer_id);
            $teacher->user_id = $user->id;
            $teacher->save();
            
            $timetable = timeschedule::all();
            foreach ($timetable as $tt) {
                # code...
                $trainerschedule = new trainerschedule;
                $trainerschedule->trainer_id = $trainer_id;
                $trainerschedule->timeschedule_id = $tt->id;
                $trainerschedule->save();
            }
            session()->flash('message', 'Trainer Added Successfully.');
            return redirect(route('admin.profile',$trainer_id));
        } else {
            session()->flash('delete', 'Please Select Subject First.');
        }
    }
}
