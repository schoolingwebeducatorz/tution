<?php

namespace App\Livewire\Admin\Meetings;

use Livewire\Component;
use App\Models\lecture;
use Livewire\WithFileUploads;

class Allmettings extends Component
{
    use WithFileUploads;

    public $topic;
    public $link;
    public $matrial;
    public $board;
    public $materialadress;

    public function render()
    {
        $lectures = lecture::get();
        return view('livewire.admin.meetings.allmettings',compact('lectures'));
    }
    protected $rules = [
        'topic' => 'required',
        'link' => 'required',
        'matrial' => 'mimes:pdf'
    ];
    // save recording ..
    public function save($id){
        $this->validate();
        $this->materialadress = time()."material".".".$this->matrial->getClientOriginalExtension();
        $this->matrial->storeAs('material', $this->materialadress, 'public');

        $lecture = lecture::find($id);
        $lecture->topic = $this->topic;
        $lecture->link  = $this->YoutubeID($this->link);
        $lecture->material = $this->materialadress;
        $lecture->board = $this->board;
        $lecture->save();
        session()->flash('message', 'Lecture Uploaded Succesfully');
    }
    // youtube ..
    function YoutubeID($url){
        if(strlen($url) > 11)
        {
            if (preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $url, $match))
            {
                return $match[1];
            }
            else
                return false;
        }

        return $url;
    }

    public function delete($id){
        $lecture = lecture::find($id);
   //     dd($id);
        $lecture->delete();
        session()->flash('delete', 'Link Deleted Succesfully');
    }
}
