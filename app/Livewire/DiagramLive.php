<?php

namespace App\Livewire;

use Livewire\Component;

class DiagramLive extends Component
{
    protected $listeners = ['SelectionMoved'];

    public $diagram;

    public function SelectionMoved()
    {
        dd('so');
    }

    public function render()
    {
        return view('livewire.diagram-live');
    }
}
