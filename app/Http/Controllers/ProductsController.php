<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

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
    public function show(string $id, Request $request)
    {

        // Getting the product from the database
        $product = Product::with('category')->findOrFail($id);
        $remaining_stock = $product->stock;
        $amount_in_cart = 0;

        $previous_route = $request->query('previous_route', route('categories.show', $product->category->name, false));

        // Checking if the session has a cart
        if(session()->has('cart'))
        {
            // Getting the cart from the session
            $cart = session()->get('cart');

            // Check if the product is in the cart
            if(isset($cart[$id]))
            {

                // Getting the amount of the product in the cart
                $amount_in_cart = $cart[$id];

                // Calculating the remaining stock (stock - amount in cart)
                $remaining_stock = $product->stock - $amount_in_cart;
            }
        }
        
        return view('products.show', [
            'title' => $product->name,
            'product' => $product,
            'category' => $product->category,
            'previous_route' => $previous_route,
            'amount_in_cart' => $amount_in_cart,
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
