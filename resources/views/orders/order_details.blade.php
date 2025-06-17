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
                    <span>Email:</span>
                    <p id="order-details-email">{{ $user->email }}</p>
                </div>
                <div class="order-formulier">
                    <span>Phone number:</span>
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
                <a href="#" id="order-details-update-button">Update</a>
            </div>
        </div>

        <div class="order-details-overview-container">
            <div class="order-details-pay">
                <h2>Overview</h2>
                <p>Product: 4x</p>
                <p>Subtotal: €85</p>
                <p>Discount:<span class="discount"> -€3</span></p>
                <div class="order-details-total">
                    <p>Total: €82</p>
                </div>
                <button type="submit" id="order-details-order-button">Order</button>
            </div>

            <div class="order-details-pay-message-container">
                <p class="error-message">Fill in all details  to  continue ordering.<br>
                    Click on update to add details.</p>
            </div>
        </div>
    
    </div>
@endsection