<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    public function company(){
        return $this->belongsTo(Company::class , 'company_id');
    }

    public function print_label(){
        return $this->hasMany(PrintLabel::class , 'product_id');
    }
}
