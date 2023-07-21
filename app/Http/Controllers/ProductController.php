<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller{

    public function index() {
        $products = Product::all();

        return view('welcome', ['products' => $products]);
    }

    public function create(){
        return view('/product/create');
    }

    public function store(Request $request){

        $product = new Product;

        $product->name = $request->name;
        $product->code = $request->code;
        $product->description = $request->description;
        $product->value = $request->value;

        $product->save();

        return redirect('/')->with('msg', 'Produto cadastrado com Sucesso');
    }


}
