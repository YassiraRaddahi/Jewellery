@extends('layout.master_layout')

@section('title', 'Order Details Update')

@section('content')
    <h1 class="title">Order Details Update</h1>

    <div class="order-details-update-container">
        <form id="order-details-update-form" action="{{route('orders.orderDetailsUpdate')}}" method="POST">
            @csrf
            @method('PATCH')

            <div class="order-details-update-label-input-div">
                <label for="order-details-update-first-name">First Name:</label>
                <input type="text" id="order-details-update-first-name" name="first-name"
                    value="{{old('first-name', $user->first_name) }}" required>
            </div>
            <div class="order-details-update-label-input-div">
                <label for="order-details-update-infix">Infix:</label>
                <input type="text" id="order-details-update-infix" name="infix" value="{{ old('infix', $user->infix) }}">
            </div>
            <div class="order-details-update-label-input-div">
                <label for="order-details-update-last-name">Last Name:</label>
                <input type="text" id="order-details-update-last-name" name="last-name"
                    value="{{old('last-name', $user->last_name) }}" required>
            </div>
            <div class="order-details-update-label-input-div">
                <label for="order-details-update-email">Email Address:</label>
                <input type="email" id="order-details-update-email" name="email" value="{{ old('email', $user->email) }}"
                    required>
            </div>
            <div class="order-details-update-label-input-div">
                <label for="order-details-update-phone">Phone Number:</label>
                <input type="tel" id="order-details-update-phone" name="phone" value="{{old('phone', $user->phone) }}">
            </div>
            <div class="order-details-update-label-input-div">
                <label for="order-details-update-address">Address:</label>
                <input type="text" id="order-details-update-address" name="address"
                    value="{{ old('address', $user->address) }}" required>
            </div>
            <div class="order-details-update-label-input-div">
                <label for="order-details-update-zipcode">ZIP Code:</label>
                <input type="text" id="order-details-update-zipcode" name="zipcode"
                    value="{{ old('zipcode', $user->zipcode) }}" required>
            </div>
            <div class="order-details-update-label-input-div">
                <label for="order-details-update-city">City:</label>
                <input type="text" id="order-details-update-city" name="city" value="{{ old('city', $user->city) }}"
                    required>
            </div>
            <div class="order-details-update-label-input-div">
                <label for="order-details-update-country">Country:</label>
                <input type="text" id="order-details-update-country" name="country"
                    value="{{ old('country', $user->country) }}" required>
            </div>
            <div class="order-details-update-formulier-footer">
                <button type="submit" id="order-details-update-button">Update</button>
            </div>
        </form>
    </div>
@endsection