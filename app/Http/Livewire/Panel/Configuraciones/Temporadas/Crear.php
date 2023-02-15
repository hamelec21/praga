<?php

namespace App\Http\Livewire\Panel\Configuraciones\Temporadas;

use App\Models\Temporada;
use Livewire\Component;

class Crear extends Component
{

    public $open_crear = false;
    public $nombre;
    protected $rules = [
        'nombre' => 'required',
    ];

    public function save()
    {
        $this-> validate();

       Temporada::firstOrCreate([
            'nombre' => $this->nombre,
        ]);

        $this->reset(['open_crear', 'nombre']);
        $this->emit('render');
        $this->emit('insert', 'El Registro fue Creado Exitosamente');
    }


    public function render()
    {
        return view('livewire.panel.configuraciones.temporadas.crear');
    }
}
