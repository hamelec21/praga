<?php

namespace App\Http\Livewire\Panel\Configuraciones\Resultados;

use App\Models\Resultado;
use Livewire\Component;

class Show extends Component
{
    protected $listeners = ['render' => 'render'];
    public function destroy($id)
    {
        Resultado::destroy($id);

        $this->emit('render');
    }
    public function render()
    {   $resultados =Resultado::orderBY('fechas_id','desc')->get();





        return view('livewire.panel.configuraciones.resultados.show',compact('resultados'));
    }
}
