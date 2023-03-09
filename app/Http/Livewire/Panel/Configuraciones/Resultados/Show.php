<?php

namespace App\Http\Livewire\Panel\Configuraciones\Resultados;

use App\Models\Resultado;
use Livewire\Component;
use Livewire\WithPagination;

class Show extends Component
{
    use WithPagination;

    protected $listeners = ['render' => 'render'];


    public function destroy($id)
    {
        Resultado::destroy($id);

        $this->emit('render');
    }


    public function render()
    {
         $resultados =Resultado::orderBY('fechas_id','desc')
         ->paginate(4);

        return view('livewire.panel.configuraciones.resultados.show',compact('resultados'));
    }
}
