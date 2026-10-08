<?php

namespace App\Livewire\Registro;

use App\Models\Registro;
use Livewire\Component;

class RegistroCreate extends Component
{
    public $sensor_id;
    public $valor;
    public $unidade;
    public $data_hora;

    public function store(){
        Registro::create([
            'sensor_id' => $this-> sensor_id,
            'valor'=> $this-> valor,
            'unidade'=> $this-> unidade,
            'data_hora'=> $this-> data_hora
        ]);
        
        session()->flash('success', 'Cadastrado');
        return redirect()-> route('registro.index');
    }

    public function render()
    {
        return view('livewire.registro.registro-create');
    }
}
