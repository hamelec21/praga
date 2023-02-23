<?php

namespace App\Http\Livewire;

use App\Models\Resultado;
use Livewire\Component;

class Historial extends Component
{
    public $historicos;

    public function mount($fechas_id)

    {

            $this->dato = Resultado::where('fechas_id' ,$fechas_id)->orderby('id','Desc')->first();

            $this->historicos = Resultado::where('fechas_id' ,$fechas_id)->orderby('id','Desc')->get();

    }

    public function render()
    {


        return view('livewire.historial');
    }
}
