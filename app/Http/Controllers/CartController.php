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

        // Getting the product ID and quantity from the request
        $productId = $request->input('product_id');

        $previous_route = $request->query('previous_route');

        $quantity = (int) $request->input('quantity', 1);

        // Retrieving the product's stock from the database
        $stock =  Product::findOrFail($productId)->stock;

        // dd($quantity);

        // Check if the quantity exceeds the stock
        if($quantity > $stock)
        {
            return back()->with('addToCartError', 'The requested quantity exceeds the available stock.');
        }

        $cart = session()->get('cart', default: []);

        if(isset($cart[$productId]))
        {
            // Check if the quantity plus the amount already in the cart exceeds the stock
            if($cart[$productId] + $quantity > $stock)
            {
                return back()->with('addToCartError', 'The requested quantity exceeds the available stock.');
            }
            
            $cart[$productId] += $quantity;
        }
        else
        {
            $cart[$productId] = $quantity;
        }

        session()->put('cart', $cart);


       return to_route('products.show',['id' => $productId, 'previous_route' => $previous_route]);
        
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
