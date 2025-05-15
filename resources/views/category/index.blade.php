@extends('layout.master_layout')
@section('title', $category->name)


@section('content')

@foreach($products as $product)
<h1>{{$product->name}}</h1>
@endforeach

@endsection