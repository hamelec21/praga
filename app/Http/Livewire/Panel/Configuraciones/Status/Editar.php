<?php

namespace App\Http\Livewire\Panel\Configuraciones\Status;

use App\Models\Estado;
use Livewire\Component;

class Editar extends Component
{
    public $open_editar = false;
    public $estado;
    public $status;
    protected $rules = [
        'estado.status' => 'required'
    ];

    public function mount(Estado $estado)
    {
        $this->estado = $estado;
    }

    public function save()
    {
        $this->estado->save();
        $this->reset(['open_editar', 'status']);
        $this->emit('render');
        $this->emit('editar'); //mensaje
    }

    public function render()
    {
        return view('livewire.panel.configuraciones.status.editar');
    }
}
