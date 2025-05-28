<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\User;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function liveSearch(Request $request)
    {
        // where id -> 5
        $products = Product::orderBy('name', 'ASC');
        
     if(request()->has('search')) {
        $searchProducts = $products->where('name', 'like', "%");
           
     }
        
        return view('home', [
            'search' => $searchProducts->paginate(4),
            'title' => 'Search Results'
        ]);
    
    }
    /**
     * Display a listing of the resource.
     */


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    } 

    /**
     * Display the specified resource.
     */
    public function show(string $name)
    {
        $products = Product::where('name', $name);
                    $categories = Product::where('name', 'categorie', $name);
        // Retrieve the product by name
        // Check if the product exists
        if (!$products) {
            $categories = $categories->where('name', $name)
                ->where('categorie', 'like', "%{$name}%")
                ->orWhere('name', 'like', "%{$name}%")
                ->get();  
         //   abort(404, 'Product not found');
        }
        // Return the view with the product data

        return view('products.show', [
            'product' => $products,
            'title' => $products->name
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
