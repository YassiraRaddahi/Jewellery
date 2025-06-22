@extends('layout.master_layout')

@section('title', 'Order History Show')

@section('content')
    <div class="order-history-header">
        <div class="go-back-link-container">
            <a href="{{route('orders.orderHistoryIndex')}}" class="go-back-link"><i class="fa-solid fa-left-long"></i>Go
                Back</a>
        </div>
    </div>

    <div class="order-history-show-container">
        <div class="order-history-show-products-all-info">
            <h2>Products</h2>
            <div class="order-history-show-products">

                @foreach($order->orderlines as $orderline)
                <div class="order-history-show-product-1">
                    <a href="{{route('products.show', ['id' => $orderline->product->id, 'previous_route' => '/' . request()->path()])}}">
                        <img src="{{ asset($orderline->product->image) }}" alt="{{$orderline->product->name}}">
                    </a>
                    <div>
                        <p>{{ $orderline->product->name }}</p>
                        <p>Price: €{{ number_format($orderline->price_at_order_time * $orderline->quantity)}}</p>
                        <p>Quantity: {{ $orderline->quantity }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="order-history-show-details-all-info">
            <h2>Order Details</h2>
            <div class="order-history-show-details">
                <p>Order Number: {{ $order->id }}</p>
                <p>Order Date: {{ $order->order_date }}</p>
                <p>Recipient’s Name: {{$order->user->first_name . " " . ($order->user->infix ? $order->user->infix . " " : "") . $order->user->last_name }}</p>
                <p>Addres: {{ $order->user->address }}</p>
                <p>Total Products: {{ $order->total_products_order }} </p>
                <p>Total Price: €{{ number_format($order->total_order_price) }}</p>
            </div>
        </div>
    </div>
@endsection