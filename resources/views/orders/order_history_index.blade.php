@extends('layout.master_layout')

@section('title', 'Order History')

@section('content')
    <div class="order-history-header">
        <div class="go-back-link-container">
            <a href="{{route('users.accountpage')}}" class="go-back-link"><i class="fa-solid fa-left-long"></i>Go Back</a>
        </div>
        <h1 class="title">Order History
    </div>

    <div class="order-history-container">

        @if($orders->isEmpty())
            <p class="no-orders-message">You have nothing ordered yet</p>
        @else
            @foreach($orders as $order)
                <div class="one-order-history-container">
                    <a class="link-to-order-box" href="#">
                        <div class="order-box">
                            <h3>Order Number: {{$order->id}} </h3>
                        </div>
                    </a>
                    <div class="order-information">
                        <p>Date: {{$order->order_date}}</p>
                        <p>Product: {{$order->total_products_order}}x</p>
                        <p>Total: €{{number_format($order->total_order_price, 2)}}</p>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
@endsection