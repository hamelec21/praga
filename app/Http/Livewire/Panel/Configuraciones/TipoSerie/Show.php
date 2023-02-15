<?php

namespace App\Http\Livewire\Panel\Configuraciones\TipoSerie;

use App\Models\TipoSerie;
use Livewire\Component;

class Show extends Component
{
    protected $listeners = ['render' => 'render'];
    public function destroy($id)
    {
       TipoSerie::destroy($id);
        $this->emit('render');
    }

    public function render()
    {
        $series=TipoSerie::all();
        return view('livewire.panel.configuraciones.tipo-serie.show',compact('series'));
    }
}
