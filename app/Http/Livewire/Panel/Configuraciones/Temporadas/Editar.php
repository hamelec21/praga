<?php

namespace App\Http\Livewire\Panel\Configuraciones\Temporadas;

use App\Models\Temporada;
use Livewire\Component;

class Editar extends Component
{

    public $open_editar = false;
    public $temporada;
    public $nombre;
    protected $rules = [
        'temporada.nombre' => 'required'
    ];

    public function mount(Temporada $temporada)
    {
        $this->temporada = $temporada;
    }

    public function save()
    {
        $this->temporada->save();
        $this->reset(['open_editar', 'nombre']);
        $this->emit('render');
        $this->emit('editar'); //mensaje
    }



    public function render()
    {
        return view('livewire.panel.configuraciones.temporadas.editar');
    }
}
