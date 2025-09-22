<?php

namespace App\Livewire\Admin\Usermanagement;

use Livewire\Component;
use App\Models\User;

class Users extends Component
{
    public function render()
    {
        $users = User::orderby('id','desc')->get();
        return view('livewire.admin.usermanagement.users',compact('users'));
    }
    public function disable($id){
        $user = User::find($id);
        $user->status = 0;
        $user->save();
        session()->flash('message', 'User Disabled Succesully.');
    }
    public function enable($id){
        $user = User::find($id);
        $user->status = 1;
        $user->save();
        session()->flash('message', 'User Enable Succesully.');
    }
}
