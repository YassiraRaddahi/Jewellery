@extends('layout.master_layout')

@section('title', 'Order History')

@section('content')
    <div class="order-history">
        <h1 class="title">Order History
    </div>

    @foreach($orders as $order)
        <div id="order-history-container">
            <div id="order-box">
                <h3>Order Number: {{$order->id}} </h3>
            </div>
            <div id="order-information">
                <p>Date: {{$order->order_date}}</p>
                <p>Product: {{$order->total_products_order}}x</p>
                <p>Total: €{{number_format($order->total_order_price, 2)}}</p>
            </div>

        </div>
    @endforeach
@endsection