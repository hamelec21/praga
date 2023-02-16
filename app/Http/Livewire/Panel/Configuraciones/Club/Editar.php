<?php

namespace App\Http\Livewire\Panel\Configuraciones\Club;

use App\Models\Club;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class Editar extends Component
{
    use WithFileUploads;
    public $open_editar = false;
    public $club;
    public $nombre;
    public $logo;

    protected $rules = [
        'club.nombre' => 'required',
        'club.logo' => 'required'
    ];

    public function mount(Club $club)
    {
        $this->club = $club;
        $this->identificador = rand();
    }

    public function save()
    {
        $this->validate();
        if ($this->logo) {
            Storage::delete([$this->club->logo]);
            $this->club->logo = $this->logo->store('public/logo_club');

        }

        $this->club->save();
        $this->reset(['open_editar', 'nombre','logo']);
        $this->identificador = rand();
        $this->emit('render');
        $this->emit('editar'); //mensaje
    }






    public function render()
    {
        return view('livewire.panel.configuraciones.club.editar');
    }
}
