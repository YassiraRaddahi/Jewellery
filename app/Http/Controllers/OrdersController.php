<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\Order;
use App\Models\OrderLine;


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


        // Gets the logged in user
        $userId = Auth::id();


        if(session()->has('cart') && !empty(session()->get('cart')))
        {
            $cart = session()->get('cart');
        }
        
        $order = Order::create([
            'user_id' => $userId
        ]);

        foreach($cart as $product_id => $quantity)
        {

            // Getting the product from the database
            $product = Product::findOrFail($product_id);

            OrderLine::create([
            'order_id' => $order->id,
            'product_id' => $product->id,
            'quantity' => $quantity,
            'price_at_order_time' => $product->price
            ]);

            $product->stock -= $quantity;
            $product->save();

        }


        // Remove the cart from the session
        session()->forget('cart');
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

        $dataToUpdate = $request->validate([
            'first-name' => ['required', 'string', 'max:255'],
            'infix' => ['nullable', 'string', 'max:255'],
            'last-name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,' . Auth::id()],
            'phone' => ['nullable', 'string', 'regex:/^\+?[1-9][0-9]{6,14}$/'],
            'address' => ['required', 'string', 'max:255'],
            'zipcode' => ['required', 'string', 'max:255'],
            'city' => ['required', 'string', 'max:255'],
            'country' => ['required', 'string', 'max:255']
        ],
[
            'phone.regex' => 'Please enter a valid phone number of 7 to 15 digits with no spaces or special characters. It may start with "+" followed by a digit other than 0.' 
        ]);

        try
        {

            $user = Auth::user();

            $user->fill([
                'first_name' => ucwords($dataToUpdate['first-name']),
                'infix' => $dataToUpdate['infix'] !== null ? strtolower($dataToUpdate['infix']) : null,
                'last_name' => ucwords($dataToUpdate['last-name']),
                'phone' => $dataToUpdate['phone'] ?? null,
                'email' => strtolower($dataToUpdate['email']),
                'address' => $dataToUpdate['address'],
                'zipcode' => $dataToUpdate['zipcode'],
                'city' => $dataToUpdate['city'],
                'country' => $dataToUpdate['country']
            ]);

            // Checks whether any data has changed
            if($user->isDirty())
            {
                $user->save();
                return redirect()->route('orders.orderdetails')->with('success', 'Your order details have been updated successfully.');
            }
        } 
        catch (\Exception $e) 
        {

            // Redirects back with an error message if update fails
            return back()->withErrors([
                'general' => 'An error occurred while updating your order details. Please try again.',
            ])->withInput();

        }

        return redirect()->route('orders.orderdetails');
    }

    public function  orderHistoryIndex()
    {
        $userId = Auth::id();

        $orders = Order::with('orderlines')
        ->where('user_id', $userId)
        ->latest()
        ->get();
        
        return view('orders.order_history_index', 
        compact('orders'));
    }

    public function orderHistoryShow($orderNumber)
    {
        $user = Auth::user();

        $order = Order::with('orderlines')->findorfail($orderNumber);

        return view('orders.order_history_show', 
        compact('user', 'order'));
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
