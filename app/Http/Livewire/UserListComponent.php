<?php

namespace App\Http\Livewire;
use App\Models\User;

use Livewire\Component;

class UserListComponent extends Component
{
    public $search;
    public $prompt;

    protected $listeners = [
        'refreshParent'
    ];

    public function refreshParent(){
        $this->prompt = " ";
    }

    public function render()
    {
        return view('livewire.user-list-component',[
            'users' => User::where('name', 'LIKE', "%{$this->search}%")->orderBy('id', 'desc')->get()
        ]);
    }
}
