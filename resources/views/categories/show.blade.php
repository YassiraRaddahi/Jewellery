@extends('layout.master_layout')

@if(isset($category->name))
    @section('title', $category->name)
@else
    @section('title', 'All Products')
@endif


@section('content')

@if(isset($category->name))
    <h1>{{$category->name}}</h1>
@else
    <h1>All Products</h1>
@endif

<div class="products-container">
    @foreach($products as $product)
        <div class="product-category-container">
            <div class="product-category">
                <img src="{{asset($product->image)}}" alt="{{$product->name}}">
            </div>    

            <div class="product-category-name-price">
                <div><h4>{{$product->name}}</h4></div>

                <div class="product-category-price">
                @if($product->sale)
                    <p><del>€{{$product->price}}</del></p>
                    <p>€{{number_format($product->price * (1 - $product->discount_factor), 2)}}</p>
                @else
                    <p>€{{$product->price}}</p>
                @endif
                </div>
            </div>
        </div>
    @endforeach
</div>

@endsection