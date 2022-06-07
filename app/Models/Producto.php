<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    //Relacionar Producto con Marca
    public function Marca(){
        return $this->belongsto(Marca::class);
    }
    public function Categoria(){
        return $this->belongsto(Categoria::class);
    }
}
