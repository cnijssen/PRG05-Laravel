<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{

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

        return redirect(route('profile'));

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

        return redirect(route('profile'));
    }

    public function destroy(Product $product){
        $product->delete();
        return redirect(route('profile'));
    }

    public function toggleStatus(Request $request)
    {
        $product = Product::find($request->id);
    
        if(!$product) {
            return response()->json(['message' => 'Product not found.'], 404);
        }
    
        $statusValue = $request->input('status');  
        $product->status = $statusValue ? 1 : 0;
        $product->save();
        
    
        return response()->json(['message' => 'Status updated successfully.']);
    }
}
