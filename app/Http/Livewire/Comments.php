<?php

namespace App\Http\Livewire;

use App\Models\Car;
use Livewire\Component;

class Comments extends Component
{
    public $comment,$rate,$car_id,$record;

    public function mount($id){
        $this->record = Car::findOrFail($id);
        $this->car_id = $this->record->id;
    }


    public function render()
    {
        return view('livewire.comments');
    }
}
