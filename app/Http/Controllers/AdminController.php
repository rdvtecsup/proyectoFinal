<?php

namespace App\Http\Controllers;

use App\Models\Reserva;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;
class AdminController extends Controller
{
    public function index(){
        // $users = User::all();
        return view('admin.panel');
    }
    public function show_user(){
        $users = User::all();
        return view('admin.clientes_control',compact('users'));
    }
    public function show_products(){
        $products = Product::all();
        return view('admin.productos_control', compact('products'));
    }
    public function agregar_Prod(){
        return view('admin.agregarProducto');
    }
    public function store(Request $request){
        $product = $request->all();
        Product::create($product);
        return redirect()->back();
    }
    public function editar(){
        return view('admin.editarProducto');
    }
    public function edit(Request $request){
        $product = Product::find($request->product_id);
        return view('admin.editarProducto')->with('product');
    }
    public function update(Request $request,$id){
        // $product = Product::find($request);
        // $product-> tipo = $request->get('tipo');
        // $product-> codigo = $request->get('codigo');
        // $product-> material = $request->get('material');
        // $product-> medida = $request->get('medida');
        $product = Product::find($id);
        $input = $request->all();
        $product->update($input);
        // return redirect('admin.productos_control')->with('success', 'Producto modificado correctamente.');
        return redirect('admin.productos_control')->with('Producto modificado correctemente.');
    }
    public function destroy(Request $request){
        $product = Product::find($request->product_id);
        $product->delete();
        return redirect()->back()->withSuccess('Producto eliminado.');
    }
    public function show_reserves(){
        $reservas = Reserva::all();
        return view('admin.reservas_control', compact('reservas'));
    }
    public function guardar(Request $request){
        $user = new User();
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->save();
    }
}
