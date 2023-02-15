<?php

namespace App\Http\Livewire\Panel\Configuraciones\Status;

use App\Models\Estado;
use Livewire\Component;

class Crear extends Component
{

    public $open_crear = false;
    public $status;
    protected $rules = [
        'status' => 'required',
    ];

    public function save()
    {
        $this-> validate();

        $test= Estado::firstOrCreate([
            'status' => $this->status,
        ]);

        $this->reset(['open_crear', 'status']);
        $this->emit('render');
        $this->emit('insert', 'El Registro fue Creado Exitosamente');
    }



    public function render()
    {
        return view('livewire.panel.configuraciones.status.crear');
    }
}
