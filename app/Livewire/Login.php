<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use Auth;

class Login extends Component
{
    public $email;
    public $password;

    public function render()
    {
        return view('livewire.login')->layout('components.layouts.client');
    }
    protected $rules = [
        'email' => 'required',
        'password' => 'required'
    ];

    public function login(){
       // dd("test");
        $this->validate();
        if(Auth::attempt(['email' => $this->email, 'password' => $this->password, 'status'=> 1])){
            if(Auth::user()->is_admin == 1){
                return redirect(route('admin.dashboard'));
            } else if(Auth::user()->is_student == 1){
                return redirect(route('student.dashboard'));
            } else if(Auth::user()->is_trainer == 1){
              //  dd("Techer here");
                return redirect(route('teacher.dashbaord'));
            }
        } else {
            session()->flash('error', 'Email or password is wrong'); 
        }
    }
}
