<?php

namespace App\Http\Livewire\Panel\Configuraciones\Fixture;

use App\Models\Fixture;
use Livewire\Component;

class Show extends Component
{
    protected $listeners = ['render' => 'render'];
    public function destroy($id)
    {
        Fixture::destroy($id);
        $this->emit('render');
    }

    public function render()
    {
        $fixtures = Fixture::all();
        return view('livewire.panel.configuraciones.fixture.show',compact('fixtures'));
    }
}
