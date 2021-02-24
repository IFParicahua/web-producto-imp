<?php

namespace App\Http\Livewire;

use App\Models\PrintDetail;
use App\Models\PrintLabel;
use Livewire\Component;

class ListLabel extends Component
{
    public $idproducto;
    public $lote;
    public $paquete;
    public $peso;
    public $id_imp_pdf;

    protected $listeners = [
        'getDetail'
    ];

    public function getDetail($id){
        $this->idproducto = $id;
        $var1 = PrintLabel::where('id', $id)->first();
        $this->lote = $var1->lote;
    }

    public function savelist(){
        $this->validate([
            'paquete' => 'required',
            'peso' => 'required',
            'idproducto' => 'required',
        ]);

        if($this->paquete < 100){
            $pack = "0".$this->paquete;
        }else{
            $pack = $this->paquete;
        }

        $peso = str_replace('.', '', $this->peso);
        $barcode = $this->lote."".$pack."".$peso;

        $item = new PrintDetail;
        $item->peso = $this->peso;
        $item->package = $this->paquete;
        $item->barcode = $barcode;
        $item->print_label_id = $this->idproducto;
        $item->save();
        $this->id_imp_pdf = $item->id;
        $this->paquete = "";
        $this->peso = "";
        $this->emit('getView', $this->idproducto);

    }

    // public function imprimir(){
    //     $this->dispatchBrowserEvent('imprimirbtn');
    // }

    public function render()
    {
        return view('livewire.list-label');
    }
}
