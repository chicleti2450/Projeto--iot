<?php

namespace App\Livewire\Registro;

use App\Models\Registro;
use Livewire\Component;

class RegistroIndex extends Component
{

    public function render()
    {
        $registros = Registro::all();

        return view('livewire.registro.registro-index', compact('registros'));
    }
}
