<?php

namespace App\Livewire\Client;

use Livewire\Component;
use App\Models\country;

class Pricing extends Component
{
    public $country;

    public function render()
    {
         $country = $this->country;
         return view('livewire.client.pricing',compact('country'))->layout('components.layouts.client');
    }
    public function mount($id){
        $this->country = country::find($id);
    }
}
