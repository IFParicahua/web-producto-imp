<?php

namespace App\Http\Livewire;

use App\Models\PrintDetail;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class SaveLabel extends Component
{
    public $id_label;
    public $id_delete;
    public $delete;
    public $create;
    public $update;

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
        // $ops = Auth::user()->rol->rols[0]->operations->id;

        $ops = Auth::user()->rol->rols;
        foreach($ops as $var){
            if ($var->operations->id == 1) {
                $create = 1;
            } elseif ($var->operations->id == 2) {
                $this->update = 1;
            } else{
                $this->delete = 1;
            }
        }

        $datos = PrintDetail::where('print_label_id', $this->id_label)->get();
        return view('livewire.save-label', compact('datos'));
    }
}
