<?php

namespace App\Http\Livewire\Panel\Configuraciones\TipoSerie;

use App\Models\TipoSerie;
use Livewire\Component;

class Editar extends Component
{
    public $open_editar = false;
    public $tiposerie;
    public $tipo;
    protected $rules = [
        'tiposerie.tipo' => 'required'
    ];

    public function mount(TipoSerie $tiposerie)
    {
        $this->tiposerie = $tiposerie;
    }

    public function save()
    {
        $this->tiposerie->save();
        $this->reset(['open_editar', 'tipo']);
        $this->emit('render');
        $this->emit('editar'); //mensaje
    }


    public function render()
    {
        return view('livewire.panel.configuraciones.tipo-serie.editar');
    }
}
