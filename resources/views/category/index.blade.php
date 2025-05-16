@extends('layout.master_layout')
@section('title', $category->name)


@section('content')

<h1>{{$category->name}}</h1>

<div class="products-container">
    @foreach($products as $product)
        <div>
            <div class="product-category">
                <img src="{{asset($product->image)}}" alt="{{$product->name}}">
            </div>    

            <h4>{{$product->name}}</h4>
        </div>
    @endforeach
</div>

@endsection