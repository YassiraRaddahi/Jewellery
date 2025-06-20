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

        // Getting the product ID, previous route and quantity from the request
        $productId = (int) $request->input('product_id');

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

        $cart = session()->get('cart',  []);

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
    public function show()
    {
        // Assigning an empty array to the cart variable 
        $cart = [];

        $cart_total_normal_price = 0;
        $cart_total_sale_price = 0;
        $cart_has_sale_products = false;

        // Checking if the session has a cart and is not empty
        if(!empty(session()->get('cart')))
        {
            // Getting the cart from the session
            $session_cart = session()->get('cart');

                // Looping through each product in the cart
                foreach($session_cart as $productId => $quantity)
                {
                    // Getting the product from the database
                    $product = Product::findOrFail($productId);

                    // Adding the product to the cart array with its quantity and its total price in the cart
                    $cart[] = [
                        'product' => $product,
                        'quantity' => $quantity,
                        'total_normal_price' => $product->price * $quantity,
                        'total_sale_price' => $product->price * (1 - $product->discount_factor) * $quantity
                    ];

                    $cart_total_normal_price += $product->price * $quantity;

                    if($product->on_sale)
                    {
                        $cart_total_sale_price += $product->price * (1 - $product->discount_factor) * $quantity;
                        $cart_has_sale_products = true;
                    }
                    else
                    {
                        $cart_total_sale_price += $product->price * $quantity;
                    }
                    
                }
        }

        // dd($cart);

        return view('carts.show', [
            'cart' => $cart,
            'cart_total_normal_price' => $cart_total_normal_price,
            'cart_total_sale_price' => $cart_total_sale_price,
            'cart_has_sale_products' => $cart_has_sale_products
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
    public function update(Request $request)
    {
        $productID = (int) $request->input('product_id');
        $quantity = (int) $request->input('quantity');

        // dd($productID, $quantity);

        // Getting the cart from the session

        $cart = session()->get('cart', []);

        if(isset($cart[$productID]))
        {
            // Updating product's quantity with the new quantity
            $cart[$productID] = $quantity;

            session()->put('cart', $cart);
        }


        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function deleteOne(Request $request)
    {

        // Converting the ID to an integer
        $id = (int) $request->input('product_id');

        // Getting the cart from the session
        $cart = session()->get('cart', []);

        // Checking if the product exists in the cart
        if(isset($cart[$id]))
        {

            // Removing the product from the cart
            unset($cart[$id]);

            // Updating the session with the modified cart
            session()->put('cart', $cart);

            // Checking if the cart is empty after removing the product
            if(empty($cart))
            {
                // If the cart is empty, remove it from the session
                session()->forget('cart');
            }

            // Returning to the cart page with a success message
            return back()->with('success', 'Product removed from cart successfully.');
        }
    }
}
