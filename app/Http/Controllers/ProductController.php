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
    public function search_product(Request $request){
        $query = Product::query();
        if ($search = $request->input('search')){
            $query->where('tipo', 'regexp', "/$search/")
                ->orWhere('material', 'regexp', "/$search/");
        }
        return $query->get();
    }
    
}
