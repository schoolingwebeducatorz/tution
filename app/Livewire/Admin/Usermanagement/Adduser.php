<?php

namespace App\Livewire\Admin\Usermanagement;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\User;

class Adduser extends Component
{
    use WithFileUploads;

    public $name;
    public $email;
    public $password;
    public $gender;
    public $photo;
    public $imgadress;

    public function render()
    {
        return view('livewire.admin.usermanagement.adduser');
    }

    protected $rules = [
        'name' => 'required',
        'email' => 'required|unique:users',
        'password' => 'required',
        'gender' => 'required',
        'photo' => 'required'
    ];
    public function create(){
        $this->validate();
        $this->imgadress = str_replace(' ', '', $this->name)."-".time()."profile".".".$this->photo->getClientOriginalExtension();
        $this->photo->storeAs('profile', $this->imgadress, 'public');

        $user = new User;
        $user->name = $this->name;
        $user->email = $this->email;
        $user->gender = $this->gender;
        $user->photo = $this->imgadress;
        $user->password = $this->password;
        $user->is_admin = 1;
        $user->save();
        $this->name = " ";
        $this->email = " ";
        $this->gender = " ";
        $this->password = " ";
        $this->photo = " ";
        session()->flash('message', 'User Created Succesully.');
    }
}
