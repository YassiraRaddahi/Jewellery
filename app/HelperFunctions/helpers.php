<?php



function countItemsCart()
{
    $amount_of_items = 0;

    if(!empty(session()->get('cart')))
    {
        $cart = session()->get('cart');

        foreach($cart as $item => $quantity)
        {
            $amount_of_items += $quantity;
        }
    }

    return $amount_of_items;
}