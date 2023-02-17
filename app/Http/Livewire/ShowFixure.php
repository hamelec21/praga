<?php

namespace App\Http\Livewire;

use App\Models\Fixture;
use Livewire\Component;


class ShowFixure extends Component
{
    public function render()
    {
        $fixtures = Fixture::all();

        return view('livewire.show-fixure',compact('fixtures'));


    }







}
