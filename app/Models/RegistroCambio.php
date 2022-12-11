<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
class RegistroCambio extends Eloquent
{
    use HasFactory;
    protected $fillable = [
        'descripcion',
    ];
    public function User(){
        return $this->belongsTo(User::class);
    }
}
