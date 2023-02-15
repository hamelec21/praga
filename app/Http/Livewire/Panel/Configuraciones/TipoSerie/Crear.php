<?php

namespace App\Http\Livewire\Panel\Configuraciones\TipoSerie;

use App\Models\TipoSerie;
use Livewire\Component;

class Crear extends Component
{
    public $open_crear = false;
    public $tipo;
    protected $rules = [
        'tipo' => 'required',
    ];

    public function save()
    {
        $this-> validate();

       $test= TipoSerie::firstOrCreate([
            'tipo' => $this->tipo,
        ]);

        $this->reset(['open_crear', 'tipo']);
        $this->emit('render');
        $this->emit('insert', 'El Registro fue Creado Exitosamente');
    }




    public function render()
    {
        return view('livewire.panel.configuraciones.tipo-serie.crear');
    }
}
