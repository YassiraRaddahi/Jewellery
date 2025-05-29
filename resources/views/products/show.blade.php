@extends('layout.master_layout')

@section('title', $title)


@section('content')



<div>
    <div class="go-back-link-container">
        <a href="{{$previous_route}}" class="go-back-link"><i class="fa-solid fa-left-long"></i>Go Back</a>
    </div>
    <div class="product-show">   
        <div class="product-category-container">
            <div class="product-category">
                <img src="{{asset($product->image)}}" alt="{{$product->name}}">
            </div>    
            <div class="product-category-name-price">
                <div><h4>{{$product->name}}</h4></div>    
            </div>
        </div>

        <div class="product-show-information-cart-group">
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

                        @if($product->stock < 1)
                        <p class="out-of-stock-message">No stock available</p>
                        @endif
                    @endif
                </div>
            </div>

            <div class="product-show-add-to-cart">
                <div class="product-show-add-to-cart-form">
                    <form action="{{route('cart.add', ['previous_route' => $previous_route])}}" method="POST">
                        @csrf
                        <select name="quantity" class="product_quantity_selector" {{ $remaining_stock < 1 ? 'disabled' : '' }}>
                            @for($i = 1; $i <= $remaining_stock; $i++)
                                <option value="{{$i}}">{{$i}}</option>
                            @endfor
                        </select>
                        <input type="hidden" name="product_id" value="{{$product->id}}">
                        <button onclick="ProductAddedMessage(this)" type="submit" name="submitButton" class="add-to-cart-button" {{ $remaining_stock < 1 ? 'disabled' : '' }}>Add to cart</button>
                    </form>
                </div>
                <div class="product-added-message">
                    @if(session('addToCartError'))
                        <div class="error-message">
                            <p>{{session('addToCartError')}}</p>
                        </div>
                    @elseif($amount_in_cart > 0)
                        <p id="product-added-message">Product is added to cart</p>    
                        <p> {{$amount_in_cart}} in cart</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection