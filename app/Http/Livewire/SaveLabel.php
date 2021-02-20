<?php

namespace App\Http\Livewire;

use App\Models\PrintDetail;
use App\Models\Product;
use Livewire\Component;

class SaveLabel extends Component
{
    public $id_label;
    public $id_delete;

    protected $listeners = [
        'getView'
    ];

    public function getView($id){
        $this->id_label = $id;
        $this->dispatchBrowserEvent('closeModal');
    }

    public function editItem($id){
        $this->emit('getID', $id);
        $this->dispatchBrowserEvent('openModal');
    }

    public function deleteItem($id_delete){
        $del = PrintDetail::find($id_delete);
        $del->delete();
    }

    public function render()
    {
        $datos = PrintDetail::where('print_label_id', $this->id_label)->get();
        return view('livewire.save-label', compact('datos'));
    }
}