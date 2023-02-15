<?php

namespace App\Http\Livewire\Panel\Configuraciones\Serie;

use App\Models\Serie;
use Livewire\Component;

class Show extends Component
{
    protected $listeners = ['render' => 'render'];
    public function destroy($id)
    {
        Serie::destroy($id);
        $this->emit('render');
    }
    public function render()
    {

        $series =Serie::all();
        return view('livewire.panel.configuraciones.serie.show',compact('series'));
    }
}
