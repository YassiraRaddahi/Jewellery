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
            @endif
        </div>
        <div>
            
        </div>
    </div>
</div>
@endsection