<?php

namespace App\Livewire\Admin\Packages;

use Livewire\Component;
use App\Models\package;

class Membership extends Component
{
    public function render()
    {
        $packages = package::orderby('id','desc')->get();
        return view('livewire.admin.packages.membership',compact('packages'));
    }
    public function delete($id){
        $package = package::find($id);
        $package->delete();
        session()->flash('delete', 'Package Deleted Succesully.');
    }
}
