<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
class Product extends Eloquent
{
    use HasFactory;
    protected $fillable = [
        'tipo',
        'codigo',
        'imagen',
        'material',
        'medida',
    ];
    public function Inventario(){
        return $this->embedsMany(Inventario::class);
    }
    public function Reserva(){
        return $this->embedsMany(Reserva::class);
    }
}
