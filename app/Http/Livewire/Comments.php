<?php

namespace App\Http\Livewire;

use App\Models\Car;
use Livewire\Component;

class Comments extends Component
{
    public $comment,$rate,$car_id,$record;
    /**
     * @var null
     */


    public function mount($id){
        $this->record = Car::findOrFail($id);
        $this->car_id = $this->record->id;
    }

    public function render()
    {
        return view('livewire.comments');
    }

    private function resetInput() {
        $this->comment=null;
        $this->rate=null;
        $this->car_id=null;
        $this->ip=null;
    }

    public function store(){
        $this->validate([
            'comment'=>'required|min:10',
            'rate'=>'required'
        ]);

        \App\Models\Comments::create([
            'car_id' => $this->car_id,
            'user_id' => Auth::id(),
            'ip' => $_SERVER['REMOTE_ADDR'],
            'rate' => $this->rate,
            'comment' => $this->comment

        ]);

        session()->flash('message', 'Review Send Succesfully.');
        $this->resetInput();
    }
}
