@extends('layout.master_layout')

@section('title', $title)


@section('content')

<div class="product-show">   
    <div class="product-category-container">
        <div class="product-category">
            <img src="{{asset($product->image)}}" alt="{{$product->name}}">
        </div>    
        <div class="product-category-name-price">
            <div><h4>{{$product->name}}</h4></div>    
        </div>
    </div>

    <div class="product-show-information">
        <div class="product-show-description">
            <h2>Description</h2>
            <p>{{$product->description}}</p>
        </div>
        <div class="product-category-price">
            @if($product->on_sale)
                <p>€{{number_format($product->price * (1 - $product->discount_factor), 2)}}</p>
                <p class="product-old-price">€{{number_format($product->price, 2)}}</p>
            @else
                <p>€{{number_format($product->price, 2)}}</p>

                @if($product->stock == 0)
                <p class="product-out-of-stock">No stock available</p>
                @endif
            @endif
        </div>
    </div>
    <div class="product-show-add-to-cart">
        <form action="{{route('cart.add')}}" method="POST">
            @csrf
            <select name="quantity" id="quantity" {{ $product->stock < 1 || $remaining_stock < 1 ? 'disabled' : '' }}>
                @for($i = 1; $i <= $remaining_stock; $i++)
                    <option value="{{$i}}">{{$i}}</option>
                @endfor
            <input type="hidden" name="product_id" value="{{$product->id}}">
            <button onclick="ProductAddedMessage(this)" type="submit" name="submitButton" class="add-to-cart-button" {{ $product->stock < 1  || $remaining_stock < 1 ? 'disabled' : '' }}>Add to cart</button>
        </form>
    </div>

    <div>
        @if(isset(session('cart')[$product->id]))
            <p id="product-added-message">Product is added to cart</p>
            <p> {{session()->get('cart')[$product->id]}} in cart</p>
        @endif
    </div>
    
</div>
@endsection