<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ShopController extends Controller
{
    public function home(Product $product){

        return view('home', ['product' => $product]);
    }


    public function shop(Request $request)
{
    $products = Product::query();

    $products->where('status', 1);

    if ($request->has('category')) {
        $categories = $request->input('category');
        $products->whereIn('category', $categories);
    }

    if ($request->has('gender')) {
        $genders = $request->input('gender');
        $products->whereIn('gender', $genders);
    }

    if ($request->has('top')) {
        $tops = $request->input('top');
        $products->whereIn('top', $tops);
    }

    $searchQuery = $request->input('query');
    if (!empty($searchQuery)) {
        $products->where(function ($query) use ($searchQuery) {
            $query->where('name', 'like', "%$searchQuery%")
                ->orWhere('category', 'like', "%$searchQuery%")
                ->orWhere('top', 'like', "%$searchQuery%")
                ->orWhere('gender', 'like', "%$searchQuery%")
                ->orWhere('size', 'like', "%$searchQuery%");
        });
    }

    $filteredProducts = $products->orderByDesc('created_at')->paginate(12); 

    $request->flash();

    return view('shop', compact('filteredProducts'));
}


    public function view(Product $product){
        return view('view', ['product' => $product]);
    }

    public function about(){
        return view('about');
    }
}
