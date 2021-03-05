<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guia extends Model
{
    use HasFactory;
    protected $dates = ['fecha_ing', 'another_date_field'];
    public function scopeBuscarpor($query,$tipo,$buscar){
        if(($tipo) && ($buscar)){
            return $query->where($tipo,'like',"%$buscar%");
        }
    }
}
