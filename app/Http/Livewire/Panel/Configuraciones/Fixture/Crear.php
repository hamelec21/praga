<?php

namespace App\Http\Livewire\Panel\Configuraciones\Fixture;

use App\Models\Club;
use App\Models\Estado;
use App\Models\Fecha;
use App\Models\Fixture;
use App\Models\Temporada;
use Livewire\Component;

class Crear extends Component
{
    public $open_crear = false;
    //public $fecha,$juega,$nombre_club_1,$nombre_club_2,$temporadas_id,$fechas_id,$status_id;
    public $fecha,$juega,$club_id,$club_id_1,$temporadas_id,$fechas_id,$status_id;

    protected $rules = [
        'juega' => 'required',
        'fecha' => 'required',
        'club_id' => 'required',
        'club_id_1' => 'required',
        'temporadas_id' => 'required',
        'fechas_id' => 'required',
        'status_id' => 'required',
    ];

    public function save()
    {
       $this-> validate();
        Fixture::Create([
            'juega' =>$this->juega,
            'fecha' =>$this->fecha,
            'club_id' =>$this->club_id,
            'club_id_1' =>$this->club_id_1,
            'temporadas_id' =>$this->temporadas_id,
            'fechas_id' =>$this->fechas_id,
            'status_id' =>$this->status_id,
        ]);

        $this->reset(['open_crear','juega','fecha','club_id','club_id_1','temporadas_id','fechas_id','status_id']);
        $this->emit('render');
        $this->emit('insert', 'El Registro fue Creado Exitosamente');
    }
    public function render()
    {
        $fechas =Fecha::all();
        $status =Estado::all();
        $clubes = Club::all();
        $temporadas =Temporada::all();
        return view('livewire.panel.configuraciones.fixture.crear',compact('status','fechas','clubes','temporadas'));
    }
}
