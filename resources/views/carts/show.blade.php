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
                        
                        @if($item['product']->on_sale)
                            <p>Total: <span class="product-old-price"> € {{number_format($item['total_normal_price'], 2)}}</span> €{{ number_format($item['total_sale_price'], 2) }}</p>
                        @else
                            <p>Total: €{{ number_format($item['total_normal_price'], 2) }}</p>
                        @endif
                        
                    </div>

                    <div class="cart-item-update-delete">
                        <form action="{{route('cart.deleteOne')}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="hidden" name="product_id" value="{{$item['product']->id}}">
                            <button class="icon-button" type="submit" name="submit-icon"><i id="trash-icon" class="fa-solid fa-trash-can"></i></button>
                        </form>

                        <form action="{{route('cart.update')}}" method="POST">
                            @csrf
                            @method('PUT')
                            <select name="quantity" class="cart_quantity_selector">
                                @for($i = 1; $i <= $item['product']->stock; $i++)
                                    <option value="{{ $i }}" {{ $i == $item['quantity'] ? 'selected' : '' }}>{{ $i }}</option>
                                @endfor
                            </select>
                            <input type="hidden" name="product_id" value="{{$item['product']->id}}">
                            <button type="submit" class="update-quantity-button">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
        <div class="bottom-cart-container">
            <div>
                @if($cart_has_sale_products)
                    <p>Total: <span class="product-old-price"> € {{number_format($cart_total_normal_price, 2)}}</span> €{{ number_format($cart_total_sale_price, 2) }}</p>
                @else
                    <p>Total: €{{ number_format($cart_total_normal_price, 2) }}</p>
                @endif

                <a href="{{route(name: 'orders.orderdetails')}}" id="order-button">Order</a>
            </div>
        </div>
    @endif



</div>

@endsection
