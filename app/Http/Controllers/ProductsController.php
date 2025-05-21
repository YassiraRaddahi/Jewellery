<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('categories.show', [
            'title' => 'All Products',
            'products' => $products,
        ]);
    }

    public function sale()
    {
        $products = Product::where('on_sale', true)->get();
        return view('categories.show', [
            'title' => 'Sale',
            'products' => $products,
        ]);
    }

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
    public function show(string $id)
    {
        $product = Product::findOrFail($id);

        $remaining_stock = $product->stock;

        if(session()->has('cart'))
        {
            $cart = session()->get('cart');

            // Check if the product is in the cart
            if(isset($cart[$id]))
            {
                 $remaining_stock = $product->stock - $cart[$id];
            }
        }
        
        return view('products.show', [
            'title' => $product->name,
            'product' => $product,
            'remaining_stock' => $remaining_stock,
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
