@extends('layout.master_layout')


@section('title', $title)


@section('content')

@include('layout.nav-products')

<div class="products-header">
     <h1 class="title">{{$title}}</h1>
    <span>{{count($products)}} products</span>
</div>

<div class="products-container">
    @foreach($products as $product)
        <div class="product-category-container">
            <div class="product-category">
                <a href="{{route('products.show', $product->id)}}"><img src="{{asset($product->image)}}" alt="{{$product->name}}"></a>
            </div>    

            <div class="product-category-name-price">
                <div class="product-category-name"><h4>{{$product->name}}</h4></div>

                <div class="product-category-price">
                @if($product->on_sale)
                    <p>€{{number_format($product->price * (1 - $product->discount_factor), 2)}}</p>
                    <p class="product-old-price">€{{number_format($product->price, 2)}}</p>
                @else
                    <p>€{{number_format($product->price, 2)}}</p>
                @endif
                </div>
            </div>
        </div>
    @endforeach
</div>

@endsection