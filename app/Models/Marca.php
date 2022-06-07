<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    use HasFactory;

    //Relacionar Marca con Prodcuto
    public function productos(){
        return $this->hasMany(Producto::class);
    }
}
