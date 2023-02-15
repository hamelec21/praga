<?php

namespace App\Http\Livewire\Panel\Configuraciones\Serie;

use App\Models\Club;
use App\Models\Serie;
use App\Models\TipoSerie;
use Livewire\Component;

class Editar extends Component
{
    public $open_editar = false;
    public $serie;
    public $nombre , $club_id, $tipo_serie_id;

    protected $rules = [
        'serie.nombre' => 'required',
        'serie.club_id'=> 'required',
        'serie.tipo_serie_id'=> 'required',
    ];

    public function mount(Serie $serie)
    {
        $this->serie = $serie;
    }

    public function save()
    {
        $this->validate();
        $this->serie->save();
        $this->reset(['open_editar', 'nombre','club_id','tipo_serie_id']);
        $this->emit('render');
        $this->emit('editar');
    }

    public function render()
    {
        $clubes = Club::all();
        $tipos = TipoSerie::all();
        return view('livewire.panel.configuraciones.serie.editar', compact('tipos','clubes'));
    }
}
