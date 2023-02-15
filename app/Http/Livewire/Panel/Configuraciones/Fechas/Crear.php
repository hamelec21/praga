<?php

namespace App\Http\Livewire\Panel\Configuraciones\Fechas;

use App\Models\Fecha;
use Livewire\Component;

class Crear extends Component
{
    public $open_crear = false;
    public $fecha;
    protected $rules = [
        'fecha' => 'required',
    ];

    public function save()
    {
        $this-> validate();

        $test= Fecha::firstOrCreate([
            'fecha' => $this->fecha,
        ]);

        $this->reset(['open_crear', 'fecha']);
        $this->emit('render');
        $this->emit('insert', 'El Registro fue Creado Exitosamente');
    }

    public function render()
    {
        return view('livewire.panel.configuraciones.fechas.crear');
    }
}
