<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrintLabel extends Model
{
    use HasFactory;

    protected $table = 'print_labels';

    public function user(){
        return $this->belongsTo(User::class , 'user_id');
    }

    public function product(){
        return $this->belongsTo(Product::class , 'product_id');
    }

    public function print_details(){
        return $this->hasMany(PrintDetail::class , 'print_label_id');
    }
}
