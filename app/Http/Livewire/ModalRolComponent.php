<?php

namespace App\Http\Livewire;

use App\Models\Operation;
use App\Models\Roles;
use App\Models\RolOperation;
use Livewire\Component;

class ModalRolComponent extends Component
{
    public $operation_list = [];
    public $rol;

    public function save_rol(){
        $this->validate([
            'rol' => 'required',
            'operation_list' => 'required'
        ]);
        $rol = new Roles;
        $rol->name = $this->rol;
        $rol->save();
        foreach($this->operation_list as $item){
            $operation = new RolOperation;
            $operation->rol_id = $rol->id;
            $operation->operation_id = $item;
            $operation->save();
        }

        $this->operation_list = '';
        $this->rol = '';
        $this->dispatchBrowserEvent('closeModal');
        $this->emit('refreshParent');
    }

    public function render()
    {
        $operaciones = Operation::all();
        return view('livewire.modal-rol-component', compact('operaciones'));
    }
}
