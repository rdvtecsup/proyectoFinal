<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class AdminController extends Controller
{
    function inicio(){
        $users = User::all();
        return view('admin.panel',compact('users'));
    }
    public function guardar(Request $request){
        $user = new User();
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->save();

    }
}
