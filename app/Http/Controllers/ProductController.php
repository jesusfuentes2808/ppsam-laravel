<?php

namespace App\Http\Controllers;

use App\Models\Local;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    //

    public function index(){
        //RELATION SIN USAR JOINS EXPLICITO en ELOQUENT entre LOCAL 1 ---- m Productos
        $products = Product::with('local')->get();
        return view('product.index', compact('products'));
    }

    public function add(){
        $locals = Local::whereStatus(1)->get();
        return view('product.add', compact('locals'));
    }

    public function store(Request $request){
        $product = new Product();

        $product->name = $request->name;
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->local_id = $request->local_id;
        $product->status = $request->status;

        $product->save();

        Session::flash('message', 'Producto agregado');
        Session::flash('alert-class', 'alert-success');

        return redirect()->route('product.index');
    }

    public function update(Request $request){
        $locals = Local::whereStatus(1)->get();
        $product = Product::find($request->id);

        return view('product.update', compact('locals', 'product'));
    }

    public function modify(Request $request){
        $product = Product::find($request->id);

        $product->name = $request->name;
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->local_id = $request->local_id;
        $product->status = $request->status;

        $product->save();

        Session::flash('message', 'Producto actualizado');
        Session::flash('alert-class', 'alert-info');

        return redirect()->route('product.index');
    }


    public function delete(Request $request){
        $product = Product::find($request->id);
        $product->delete();

        Session::flash('message', 'Producto eliminado');
        Session::flash('alert-class', 'alert-danger');

        return redirect()->route('product.index');
    }
}
