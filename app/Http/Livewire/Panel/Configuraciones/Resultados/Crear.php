<?php

namespace App\Http\Livewire\Panel\Configuraciones\Resultados;

use App\Models\Club;
use App\Models\Estado;
use App\Models\Fecha;
use App\Models\Resultado;
use App\Models\Serie;
use App\Models\Temporada;
use App\Models\TipoSerie;
use Livewire\Component;

class Crear extends Component
{
    public $open_crear = false;
    public $tiposerie,$serie_id;
    public $tiposeries =[],$series=[];
    public $club_id_1 ,$resultado_local , $resultado_visita, $club_id,$fechas_id,$temporadas_id,$status_id;

    protected $rules = [
        'club_id_1' => 'required',
        'resultado_local' => 'required',
        'resultado_visita' => 'required',
        'club_id' => 'required',
        'fechas_id' => 'required',
        'temporadas_id' => 'required',
        'status_id' => 'required',
        'tiposerie'=>'required',
        'serie_id'=>'required',
    ];


    public function mount()
    {
        $this->tiposeries =TipoSerie::all();
        $this->series =collect();
    }

    public function updatedTiposerie($value)
    {
        $this->series =Serie::where('tipo_serie_id',$value)->get();
        $this->serie_id = $this->series->first()->id ?? null;

    }

    public function save()
    {
        $this-> validate();
        Resultado::Create([
            'club_id_1' =>$this->club_id_1,
            'resultado_local' =>$this->resultado_local,
            'resultado_visita' =>$this->resultado_visita,
            'club_id' =>$this->club_id,
            'fechas_id' =>$this->fechas_id,
            'temporadas_id' =>$this->temporadas_id,
            'serie_id' => $this->serie_id,
            'tiposerie' => $this->tiposerie,
            'status_id' => $this->status_id,
        ]);

        $this->reset(['open_crear','club_id_1','resultado_local','resultado_visita','club_id','serie_id','temporadas_id','fechas_id','status_id','tiposerie']);
        $this->emit('render');
        $this->emit('insert', 'El Registro fue Creado Exitosamente');
    }



    public function render()
    {
        $fechas =Fecha::all();
        $status =Estado::all();
        $clubes = Club::all();
        $temporadas =Temporada::all();

        return view('livewire.panel.configuraciones.resultados.crear',compact('fechas','status','clubes','temporadas'));
    }
}
