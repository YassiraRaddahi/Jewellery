@extends('layout.master_layout')
@section('title', 'Shopping Cart')
@section('content')

<h1 class="title">Shopping Cart</h1>

<div class="cart-container">

    @if(empty($cart))
    <p id="empty-cart-message">Your cart is empty</p>
    @else
        @foreach($cart as $item)
            <div class="cart-item">

                <div class="cart-item-image-container">
                    <a href="{{route('products.show', ['id' => $item['product']->id, 'previous_route' => '/' . request()->path()])}}"><img src="{{ asset($item['product']->image) }}" alt="{{ $item['product']->name }}"></a>
                </div>

                <div class="cart-item-details">
                    <div class="cart-item-name-price">
                        <div class="cart-item-name-container">
                            <h4>{{ $item['product']->name }}</h4>
                        </div>
                        <p>Total: €{{ number_format($item['total_price'], 2) }}</p>
                    </div>

                    <div class="cart-item-update-delete">
                        <a href= "{{route('cart.deleteOne', $item['product']->id)}}" ><i id="trash-icon" class="fa-solid fa-trash-can"></i></a>
                        <form action="{{route('cart.update')}}" method="POST">
                            @csrf
                            <select name="quantity" class="cart_quantity_selector">
                                @for($i = 1; $i <= $item['product']->stock; $i++)
                                    <option value="{{ $i }}" {{ $i == $item['quantity'] ? 'selected' : '' }}>{{ $i }}</option>
                                @endfor
                            </select>
                            <button type="submit" class="update-quantity-button">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    @endif



</div>

@endsection
