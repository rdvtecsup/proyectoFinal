<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Reserva;
class ReservaController extends Controller
{
    
    public function index()
    {
        $reserva = Reserva::all();
        return view('/reservas',compact('reservas'));
    }
    public function ir_reservar(){
        return view('');
    }
    public function reservar(Request $request)
    {
        $id = auth()->user()->id;
        $user = User::find($id);
        $reserva = $user->Reservas()->save(
            new Reserva([
                'dni' => $request->dni,
                'fecha' => $request->fecha,
            ])
        );
        return view('reservas',compact('reservar'))->with('reservar');
    }
}