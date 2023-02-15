<?php

namespace App\Http\Livewire\Panel\Configuraciones\Club;

use App\Models\Club;
use Livewire\Component;


class Show extends Component
{
    protected $listeners = ['render' => 'render'];

    public function destroy($id)
    {
        Club::destroy($id);
    }


    public function render()
    {
        $equipos = Club::all();
        return view('livewire.panel.configuraciones.club.show',compact('equipos'));
    }
}
