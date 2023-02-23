<?php

namespace App\Http\Livewire;

use App\Models\Resultado;
use Livewire\Component;

class Historial extends Component
{

    public function mount($fechas_id)

    {

            $this->historico = Resultado::where('fechas_id' ,$fechas_id)->orderby('id','Desc')->first();
            //  dd($this->historico);

       


    }

    public function render()
    {

        return view('livewire.historial');
    }
}
