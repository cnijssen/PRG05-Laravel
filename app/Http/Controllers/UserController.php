<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class UserController extends Controller
{
    public function login(){
        return view('login');
    }

    public function register(){
        return view('register');
    }

    public function profile(Request $request)
{
    $products = Product::query();

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

    $filteredProducts = $products->orderByDesc('created_at')->get();

    $request->flash();

    return view('profile', compact('filteredProducts'));
    }
}
