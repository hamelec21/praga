<?php

namespace App\Http\Livewire\Panel\Configuraciones\Serie;


use App\Models\Club;
use App\Models\Serie;
use App\Models\TipoSerie;
use Livewire\Component;

class Crear extends Component
{
    public $open_crear = false;
    public $nombre , $club_id, $tipo_serie_id;

    protected $rules = [
        'nombre' => 'required',
        'tipo_serie_id' => 'required',
        'club_id' => 'required',
    ];


    public function save()
    {
        $this-> validate();
        Serie::firstOrCreate([
            'nombre' => $this->nombre,
            'tipo_serie_id' => $this->tipo_serie_id,
            'club_id' => $this->club_id,
        ]);

        $this->reset(['open_crear', 'nombre','tipo_serie_id','club_id']);
        $this->emit('render');
        $this->emit('insert', 'El Registro fue Creado Exitosamente');
    }

    public function render()
    {
        $tipos = TipoSerie::all();
        $clubes =Club::all();
        return view('livewire.panel.configuraciones.serie.crear',compact('tipos','clubes'));
    }
}
