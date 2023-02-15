<?php

namespace App\Http\Livewire\Panel\Configuraciones\Fechas;

use App\Models\Fecha;
use Livewire\Component;

class Show extends Component
{
    protected $listeners = ['render' => 'render'];
    public function destroy($id)
    {
        Fecha::destroy($id);
        $this->emit('render');
    }
    public function render()
    {
        $fechas = Fecha::all();
        return view('livewire.panel.configuraciones.fechas.show',compact('fechas'));
    }
}
