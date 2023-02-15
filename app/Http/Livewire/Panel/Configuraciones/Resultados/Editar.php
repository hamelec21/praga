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

class Editar extends Component
{
    public $open_editar = false;
    public $resultados;
    public $tiposerie,$serie_id;
    public $club_id_1 ,$resultado_local , $resultado_visita, $club_id,$fechas_id,$temporadas_id,$status_id;

    protected $rules = [
        'resultados.club_id_1' => 'required',
        'resultados.resultado_local' => 'required',
        'resultados.resultado_visita' => 'required',
        'resultados.club_id' => 'required',
        'resultados.fechas_id' => 'required',
        'resultados.temporadas_id' => 'required',
        'resultados.status_id' => 'required',
        'resultados.tiposerie'=>'required',
        'resultados.serie_id'=>'required',
    ];
    public function mount(Resultado $resultado)
    {
        $this->$resultado = $resultado;
    }

    public function save()
    {
        $this->resultados->save();
        $this->reset(['open_editar','club_id_1','resultado_local','resultado_visita','club_id','serie_id','temporadas_id','fechas_id','status_id','tiposerie']);
        $this->emit('render');
        $this->emit('editar'); //mensaje
    }


    public function render()
    {
        $fechas =Fecha::all();
        $status =Estado::all();
        $clubes = Club::all();
        $temporadas =Temporada::all();
        $tiposeries =TipoSerie::all();
        $series =Serie::all();
        return view('livewire.panel.configuraciones.resultados.editar',compact('fechas','status','clubes','temporadas','tiposeries','series'));
    }
}
