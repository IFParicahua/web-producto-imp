<?php

namespace App\Http\Livewire;

use App\Models\PrintDetail;
use Livewire\Component;

class ModalEdit extends Component
{
    public $idlist_d;
    public $paquete_d;
    public $peso_d;

    protected $listeners = [
        'getID'
    ];

    public function getID($id){
        $item = PrintDetail::where('id', $id)->first();
        $this->idlist_d = $id;
        $this->colada_d = $item->colada ;
        $this->peso_d = $item->peso ;
        $this->paquete_d = $item->package ;
    }

    public function saveedit(){
        $this->validate([
            'paquete_d' => 'required',
            'peso_d' => 'required',
        ]);

        $item = PrintDetail::find($this->idlist_d);
        $item->peso = $this->peso_d;
        $item->package = $this->paquete_d;
        $item->save();
        $this->emit('getView', $item->print_label_id);
    }

    public function render()
    {
        return view('livewire.modal-edit');
    }
}
