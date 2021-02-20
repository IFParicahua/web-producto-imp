<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrintDetail extends Model
{
    use HasFactory;

    protected $table = 'print_details';

    public function print_label(){
        return $this->belongsTo(PrintLabel::class , 'print_label_id');
    }
}
