<?php

namespace App\Http\Livewire\Panel\Configuraciones\Fixture;
use App\Models\Club;
use App\Models\Estado;
use App\Models\Fecha;
use App\Models\Fixture;
use App\Models\Temporada;
use Livewire\Component;

class Editar extends Component
{
    public $open_editar = false;
    public $fixtures;
    public $fecha,$juega , $club_id ,$club_id_1, $temporadas_id,$fechas_id,$status_id;
    protected $rules = [
        'fixtures.juega' => 'required',
        'fixtures.fecha' => 'required',
        'fixtures.club_id' => 'required',
        'fixtures.club_id_1' => 'required',
        'fixtures.temporadas_id' => 'required',
        'fixtures.fechas_id' => 'required',
        'fixtures.status_id' => 'required',
    ];

    public function mount(Fixture $fixture)
    {
        $this->$fixture = $fixture;
    }

    public function save()
    {
        $this->fixtures->save();
        $this->reset(['open_editar', 'fecha','juega','club_id','club_id_1','temporadas_id','fechas_id','status_id']);
        $this->emit('render');
        $this->emit('editar'); //mensaje
    }

    public function render()
    {
        $fechas =Fecha::all();
        $status =Estado::all();
        $clubes = Club::all();
        $temporadas =Temporada::all();
        return view('livewire.panel.configuraciones.fixture.editar',compact('temporadas','clubes','status','fechas'));
    }
}
