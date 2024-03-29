<?php

namespace App\Http\Livewire;

use App\Models\Club;
use App\Models\Resultado;
use Livewire\Component;

class ShowResultados extends Component
{
    public function render()
    {


    $resultados = Resultado::orderBy('id','desc')
        ->  take(4)->get();;

        return view('livewire.show-resultados',compact('resultados'));
    }
}
