<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\trailrequest;

class Trailclass extends Component
{
    public function render()
    {
        $trailrequests = trailrequest::all();
        return view('livewire.admin.trailclass',compact('trailrequests'));
    }
    public function approved($id){
        $trail = trailrequest::find($id);
        $trail->status = 1;
        $trail->save();
        session()->flash('message', 'Trail Class Has Been Approved');
    }
    public function delete($id){
        $trail = trailrequest::find($id);
        $trail->delete();
        session()->flash('error', 'Trail Class Request Has Been Deleted Succesfully');
    }
}
