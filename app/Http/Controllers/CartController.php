<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }


    public function add(Request $request)
    {
        // dd($request->all());
        $productId = $request->input('product_id');
        $quantity = (int) $request->input('quantity', 1);
        $stock =  Product::findOrFail($productId)->stock;

        // dd($quantity);

        $cart = session()->get('cart', []);

        if(isset($cart[$productId]))
        {
            // Check if the quantity exceeds the stock
            
            $cart[$productId] += $quantity;
        }
        else
        {
            $cart[$productId] = $quantity;
        }

        session()->put('cart', $cart);


       return to_route('products.show',$productId);
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
