<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products = Product::All();
        return view('productos', compact('products'));
    }
    public function store(Request $request){
        $product = new Product();
        $product-> tipo = $request->get('tipo');
        $product-> codigo = $request->get('codigo');
        $product-> material = $request->get('material');
        $product-> medida = $request->get('medida');
        $product->save();
        return redirect('productos')->with('sucess', 'Producto añadido');
    }
    public function edit(Request $request,$id){
        $product = Product::find($id);
        return view('product_edit', compact('product','id'));
    }
    public function update(Request $request, $id){
        $product = Product::find($id);
        $product-> tipo = $request->get('tipo');
        $product-> codigo = $request->get('codigo');
        $product-> material = $request->get('material');
        $product-> medida = $request->get('medida');
        $product->save();
        return redirect('productos')->with('sucess', 'Producto modificado correctamente.');
    }
    public function destroy($id){
        $product = Product::find($id);
        $product->delete();
        return redirect('productos')->with('sucess','Producto eliminado correctamente');
    }
}
