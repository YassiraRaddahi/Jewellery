<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;

class OrdersController extends Controller
{

    public function orderPlacedMessage()
    {

        if(!session()->has('order_placed'))
        {
            return redirect('/');
        }

        return view('orders.order_placed');
    }

    public function orderDetails(Request $request)
    {

        if (empty(session()->get('cart'))) 
        {
            return redirect()->route('cart.show');
        }
    
        // Gets the logged in user
        $user = Auth::user();

        // Checks whether the required data of the user exists in the database
        $requiredDataIsMissing = collect($user->getAttributes())
        ->except('email_verified_at', 'phone', 'remember_token', 'infix')
        ->contains(null);

        $cart_total_normal_price = 0;
        $cart_total_sale_price = 0;
        $cart_has_sale_products = false;
        $total_products_in_cart = 0;

        // Checking if the session has a cart and is not empty
        if(!empty(session()->get('cart')))
        {
            // Getting the cart from the session
            $session_cart = session()->get('cart');

                // Looping through each product in the cart
                foreach($session_cart as $productId => $quantity)
                {
                    $total_products_in_cart += $quantity;

                    // Getting the product from the database
                    $product = Product::findOrFail($productId);
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

        return view('orders.order_details', [
            'user' => $user,
            'requiredDataIsMissing' => $requiredDataIsMissing,
            'cart_total_normal_price' => $cart_total_normal_price,
            'cart_total_sale_price' => $cart_total_sale_price,
            'cart_has_sale_products' => $cart_has_sale_products,
            'total_products_in_cart' => $total_products_in_cart
        ]);
    }

    public function placeOrder(Request $request)
    {
        $request->session()->flash('order_placed', true);

        return redirect()->route('orders.orderPlacedMessage');
    }
    
    public function orderDetailsUpdateForm()
    {

        if (empty(session()->get('cart'))) 
        {
            return redirect()->route('cart.show');
        }

        $user = Auth::user();

        return view('orders.order_details_update', compact('user'));
    }

    public function orderDetailsUpdate(Request $request)
    {
        return redirect()->route('orders.orderdetails');
    }

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
