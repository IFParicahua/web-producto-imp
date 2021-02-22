<?php

namespace App\Http\Livewire;

use App\Models\PrintDetail;
use App\Models\PrintLabel;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class IndexComponent extends Component
{
    protected $queryString = ['search' => ['except' => '']];
    public $search = '';
    public $date;
    public $turno;
    public $resp;
    public $mat;
    public $delete;
    public $create;
    public $update;

    public function render()
    {
        $ops = Auth::user()->rol->rols;
        foreach($ops as $var){
            if ($var->operations->id == 1) {
                $this->create = 1;
            } elseif ($var->operations->id == 2) {
                $this->update = 1;
            } else{
                $this->delete = 1;
            }
        }

        $lote = PrintLabel::where('lote', $this->search)->first();
        if($lote){
            $packages = PrintDetail::where('print_label_id', 'LIKE', $lote->id)->orderBy('id', 'desc')->get();
            $this->date = 'Fecha: '.$lote->date_print ;
            $this->turno = 'Turno: '.$lote->turn ;
            $this->resp = 'Responsable: '.$lote->user->name ;
            $this->mat = 'Material: '.$lote->product->cod_material;
        }else{
            $packages = PrintDetail::orderBy('id', 'desc')->get();
            $this->date = '';
            $this->turno = '';
            $this->resp = '';
            $this->mat = '';
        }

        return view('livewire.index-component', compact('packages'));
    }
}
