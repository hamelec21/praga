<?php

namespace App\Http\Livewire\Panel\Configuraciones\Status;

use App\Models\Estado;

use Livewire\Component;

class Show extends Component
{
    protected $listeners = ['render' => 'render'];

    public function destroy($id)
    {
        Estado::destroy($id);
        $this->emit('render');
    }


    public function render()
    {
        $status = Estado::all();
        return view('livewire.panel.configuraciones.status.show', compact('status'));
    }
}
