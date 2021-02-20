<?php

namespace App\Http\Livewire;

use App\Models\PrintDetail;
use Livewire\Component;

class ListLabel extends Component
{
    public $idproducto;
    public $colada;
    public $paquete;
    public $peso;

    protected $listeners = [
        'getDetail'
    ];

    public function getDetail($id){
        $this->idproducto = $id;
    }

    public function savelist(){
        $this->validate([
            'colada' => 'required',
            'paquete' => 'required',
            'peso' => 'required',
            'idproducto' => 'required',
        ]);
        $var1 = strval($this->colada);
        $var2 = '12/03';
        $col = str_replace('/', '', $this->colada);

        if($this->paquete < 100){
            $pack = "0".$this->paquete;
        }else{
            $pack = $this->paquete;
        }

        $peso = str_replace('.', '', $this->peso);
        $barcode = $col."".$pack."".$peso;

        $item = new PrintDetail;
        $item->colada = $this->colada;
        $item->peso = $this->peso;
        $item->package = $this->paquete;
        $item->barcode = $barcode;
        $item->print_label_id = $this->idproducto;
        $item->save();
        $this->colada = "";
        $this->paquete = "";
        $this->peso = "";
        $this->emit('getView', $this->idproducto);
    }

    public function render()
    {
        return view('livewire.list-label');
    }
}
