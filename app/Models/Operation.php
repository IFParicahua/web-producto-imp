<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Operation extends Model
{
    use HasFactory;

    protected $table = 'operations';

    public function user(){
        return $this->hasMany(User::class , 'operation_id');
    }
}
