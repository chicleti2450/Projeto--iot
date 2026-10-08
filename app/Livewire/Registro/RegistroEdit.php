<?php

namespace App\Livewire\Registro;

use App\Models\Registro;
use Livewire\Component;

class RegistroEdit extends Component
{
    public $sensor_id;
    public $valor;
    public $unidade;
    public $data_hora;
    public $registroId;

    public function mount($id){
        $registro = Registro::find($id);

        $this->registroId = $registro->id;
        $this-> sensor_id = $registro->sensor_id;
        $this-> valor = $registro-> valor; 
        $this-> unidade = $registro-> unidade;
        $this-> data_hora = $registro-> data_hora;
    }

    public function update(){
        $registro = Registro::find($this->registroId);

        $registro->sensor_id = $this-> sensor_id;
        $registro-> valor = $this-> valor; 
        $registro-> unidade = $this-> unidade;
        $registro-> data_hora = $this-> data_hora;

        $registro->save();

        session()->flash('success', 'Atualizado');
        return redirect()-> route('registro.index');
    }

    public function render()
    {
        return view('livewire.registro.registro-edit');
    }
}
