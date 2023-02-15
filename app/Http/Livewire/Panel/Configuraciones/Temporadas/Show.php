<?php

namespace App\Http\Livewire\Panel\Configuraciones\Temporadas;

use App\Models\Temporada;
use Livewire\Component;

class Show extends Component
{
    protected $listeners = ['render' => 'render'];
    public function destroy($id)
    {
        Temporada::destroy($id);
        $this->emit('render');
    }

    public function render()
    {
        $tempos = Temporada::all();
        return view('livewire.panel.configuraciones.temporadas.show',compact('tempos'));
    }
}
