<?php

namespace App\Http\Livewire\Panel\Configuraciones\Club;

use App\Models\Club;
use Livewire\Component;
use Livewire\WithFileUploads;

class Crear extends Component
{
    use WithFileUploads;
    public $open_crear = false;
    public $nombre, $logo;
    protected $rules = [
        'nombre' => 'required',
        'logo' => 'required',
    ];

    public function save()
    {
        $this-> validate();
       // $logo = $this->logo->store('public/logo_club');
        $logo = $this->logo->store('storage/logo_club');

        Club::firstOrCreate([
            'nombre' => $this->nombre,
            'logo' => $logo
        ]);

        $this->reset(['open_crear', 'nombre','logo']);
        $this->emit('render');
        $this->emit('insert', 'El Registro fue Creado Exitosamente');
    }

    public function render()
    {
        return view('livewire.panel.configuraciones.club.crear');
    }
}
