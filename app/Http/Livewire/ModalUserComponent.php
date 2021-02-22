<?php

namespace App\Http\Livewire;

use App\Models\Roles;
use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;

class ModalUserComponent extends Component
{
    public $rol;
    public $name;
    public $email;
    public $password;

    public function save_user(){
        $this->validate([
            'rol' => 'required',
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);
        $user = new User;
        $user->name = $this->name;
        $user->email = $this->email;
        $user->password = Hash::make($this->password);
        $user->rol_id = $this->rol;
        $user->save();

        $this->rol = '';
        $this->name = '';
        $this->email = '';
        $this->password = '';

        $this->dispatchBrowserEvent('closeModaluser');
        $this->emit('refreshParent');

    }
    public function render()
    {
        $roles = Roles::all();
        return view('livewire.modal-user-component', compact('roles'));
    }
}
