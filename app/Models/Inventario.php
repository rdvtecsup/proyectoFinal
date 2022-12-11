<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Inventario extends Eloquent
{
    use HasFactory;
    protected $fillable = [
        'marca',
        'cantidad',
        'devisa',
        'costo',
        'factura_compra',
    ];
    public function Product(){
        return $this->belongsTo(Product::class);
    }
}
