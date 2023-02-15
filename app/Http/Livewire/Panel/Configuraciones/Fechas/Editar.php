<?php

namespace App\Http\Livewire\Panel\Configuraciones\Fechas;

use App\Models\Fecha;
use Livewire\Component;

class Editar extends Component
{

    public $open_editar = false;
    public $fecha;
    public $data;
    protected $rules = [
        'data.fecha' => 'required'
    ];

    public function mount(Fecha $fecha)
    {
        $this->fecha = $fecha;
    }

    public function save()
    {
        $this->fecha->save();
        $this->reset(['open_editar', 'fecha']);
        $this->emit('render');
        $this->emit('editar'); //mensaje
    }


    public function render()
    {
        return view('livewire.panel.configuraciones.fechas.editar');
    }
}
