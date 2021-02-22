<?php

namespace App\Http\Livewire;

use App\Models\PrintLabel;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Illuminate\Support\Carbon;

class TitleLabel extends Component
{
    public $producto;
    public $diametro;
    public $m_alert;
    public $turno;
    public $lote;
    public $status;
    public $date_new;

    public function complete_date(){
        $id_encontrar = Product::where('cod_material', $this->producto)->first();
        if($id_encontrar){
            $this->diametro = $id_encontrar->diametro;
        } else {
            $this->diametro = "";
        }
    }

    public function savetitle(){
        $this->validate([
            'lote' => 'required|unique:print_labels',
            'producto' => 'required',
            'diametro' => 'required',
        ]);
        $id_encontrar = Product::where([['cod_material', $this->producto],['diametro', $this->diametro]])->first();

        if ($id_encontrar) {
            $fecha = new Carbon;
            $title = new PrintLabel;
            $title->date_print = $fecha;
            $title->turn = $this->turno;
            $title->product_id = $id_encontrar->id;
            $title->user_id = Auth::user()->id;
            $title->lote = $this->lote;
            $title->save();
            $this->status = 'disabled';
            $this->emit('getDetail', $title->id);
            $this->m_alert = " ";
        } else {
            $this->m_alert = "No se encontraron datos en registro";
        }
    }

    public function render()
    {
        $dato = Product::where('cod_material', $this->producto)->first();
        if($dato){
            $this->diametro = $dato->diametro;
        }
        if($this->lote == null){
            $this->status = '';
        }
        $hora = date("H");
        if($hora < 6){
            $this->turno = 'Noche';
        }elseif ($hora < 11) {
            $this->turno = 'día';
        }elseif ($hora < 18) {
            $this->turno = 'Tarde';
        }else{
            $this->turno = 'Noche';
        }
        $this->date_new = date("d/m/Y");

        return view('livewire.title-label');
    }
}
