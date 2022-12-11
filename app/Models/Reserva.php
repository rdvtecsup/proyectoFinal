<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
class Reserva extends Eloquent
{
    use HasFactory;
    protected $fillable = [
        'dni',
        'fecha',
    ];
    public function User(){
        return $this->belongsTo(User::class);
    }
}
