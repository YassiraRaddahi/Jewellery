@extends('layout.master_layout')

@section('title', 'Order  Details Update')

@section('content')
    <h1 class="title">Order details update</h1>
    <div class="order-details-update-container">
        <div class="order-details-update-formulier">
            <span>Name:</span>
            <div>
                <span class="important">*</span>
                <input type="text" id="order-details-update-name" value="{{ $user->first_name . ' ' . ($user->infix ? $user->infix . ' ' : '') . $user->last_name }}" required>
            </div>
        </div>
        <div class="order-details-update-formulier">
            <span>Email:</span>
            <div>
                <span class="important">*</span>
                <input type="email" id="order-details-update-email" value="{{ $user->email }}" required>
            </div>
        </div>
        <div class="order-details-update-formulier">
            <span>Phone number:</span>
            <div>
                <input type="text" id="order-details-update-phone" value="{{ $user->phone }}" required>
            </div>
        </div>
        <div class="order-details-update-formulier">
            <span>Address:</span>
            <div>
                <span class="important">*</span>
                <input type="text" id="order-details-update-address" value="{{ $user->address }}" required>
            </div>
        </div>
        <div class="order-details-update-formulier">
            <span>ZIP Code:</span>
            <div>
                <span class="important">*</span>
                <input type="text" id="order-details-update-zipcode" value="{{ $user->zipcode }}" required>
            </div>
        </div>
        <div class="order-details-update-formulier">
            <span>City:</span>
            <div>
                <span class="important">*</span>
                <input type="text" id="order-details-update-city" value="{{ $user->city }}" required>
            </div>
        </div>
        <div class="order-details-update-formulier">
            <span>Country:</span>
            <div>
                <span class="important">*</span>
                <input type="text" id="order-details-update-country" value="{{ $user->country }}" required>
            </div>
        </div>
        <div class="order-details-update-formulier-footer">
           
        <span class="important">* Required fields</span>
        <button id="order-details-update-button">Update</button>
        </div>
    </div>
@endsection