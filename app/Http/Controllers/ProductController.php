<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function home(Product $product){
        return view('home', ['product' => $product]);
    }

    public function shop(){
        $products = Product::all();
        return view('shop', ['products' => $products]);
    }

    public function view(Product $product){
        return view('view', ['product' => $product]);
    }

    public function create(){
        return view('products.create');
    }

    public function store(Request $request){
        $data = $request->validate([
            'image' => 'required',
            'category' => 'required',
            'top' => 'required',
            'name' => 'required',
            'size' => 'required|numeric',
            'price' => 'required|decimal:0,2',
            'gender' => 'nullable'
        ]);

        $newProduct = Product::create($data);

        return redirect(route('shop'));

    }

    public function edit(Product $product){
        return view('products.edit', ['product' => $product]);
    }

    public function update(Product $product, Request $request){
        $data = $request->validate([
            'image' => 'required',
            'category' => 'required',
            'top' => 'required',
            'name' => 'required',
            'size' => 'required|numeric',
            'price' => 'required|decimal:0,2',
            'gender' => 'nullable'
        ]);

        $product->update($data);

        return redirect(route('shop'))->with('success', 'Product Updated Succesfully');
    }

    public function destroy(Product $product){
        $product->delete();
        return redirect(route('shop'))->with('success', 'Product Deleted Succesfully');
    }
}
