@extends('layout.master_layout')

@section('title', 'Order Details')

@section('content')
    <h1 class="title">Order Details</h1>

    <div class="order-details-container">
        <div class="order-details-user-info-container">
            <div class="order-details-user-info-divs-container">
                <div class="order-formulier">
                    <span>Name:</span>
                    <p id="order-details-name">
                        {{ $user->first_name . " " . ($user->infix ? $order->user->infix . " " : "") . $user->last_name }}</p>
                </div>
                <div class="order-formulier">
                    <span>Email Address:</span>
                    <p id="order-details-email">{{ $user->email }}</p>
                </div>
                <div class="order-formulier">
                    <span>Phone Number:</span>
                    <p id="order-details-phone">{{ $user->phone }}</p>
                </div>
                <div class="order-formulier">
                    <span>Address:</span>
                    <p id="order-details-address">{{ $user->address }}</p>
                </div>
                <div class="order-formulier">
                    <span>ZIP Code:</span>
                    <p id="order-details-zipcode">{{ $user->zipcode }}</p>
                </div>
                <div class="order-formulier">
                    <span>City:</span>
                    <p id="order-details-city">{{ $user->city }}</p>
                </div>
                <div class="order-formulier">
                    <span>Country:</span>
                    <p id="order-details-country">{{ $user->country }}</p>
                </div>
            </div>
            <div class="order-details-user-info-button-container">
                <a href="{{route('orders.orderDetailsUpdateForm')}}" id="order-details-update-button">Update</a>
            </div>
        </div>

        <div class="order-details-overview-container">
            <div class="order-details-pay">
                <h2>Overview</h2>
                <p>Products: {{$total_products_in_cart}}x</p>
                 @if($cart_has_sale_products)
                <p>Subtotal: €{{number_format($cart_total_normal_price, 2)}} </p>
                    <p>Discount:<span class="discount"> -{{number_format($cart_total_normal_price - $cart_total_sale_price, 2)}}</span></p>
                    
                <div class="order-details-total">
                    <p>Total: {{number_format($cart_total_sale_price, 2)}}</p>
                </div>
                @else
                    <div class="order-details-total">
                    <p>Total: {{number_format($cart_total_normal_price, 2)}}</p>
                </div>
                @endif
                <form action="{{route('orders.placeOrder')}}" method="POST">
                    @csrf
                    <button onmouseenter="onHoverOrderButton()" onmouseleave="onHoverLeaveOrderButton()" type="submit" id="order-details-order-button" {{$requiredDataIsMissing ? 'disabled' : ''}}>Order</button>
                    <input type="hidden" name="hasOrdered" value="true">
                </form>
            </div>

            <div class="order-details-pay-message-container">
                @if($requiredDataIsMissing)
                    <p class="error-message">
                        Please fill in all details to continue ordering.<br>
                        Phone number is not required.
                    </p>
                @endif
            </div>
        </div>
    </div>
@endsection