<?php

namespace App\Livewire;

use App\Models\Diagram;
use Livewire\Component;
use Livewire\Livewire;

class DiagramLive extends Component
{
    // protected $listeners = ['diagramChange'];
    // public function diagramChange($data)
    // {
    //     $newDiagram = Diagram::findOrFail($this->diagram->id);
    //     $newDiagram->content = $data;
    //     $newDiagram->save();
    //     // return redirect()->route('diagram.show', $this->diagram->id);
    // }

    public $diagram;

    public function render()
    {
        return view('livewire.diagram-live');
    }
}
