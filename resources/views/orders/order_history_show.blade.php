@extends('layout.master_layout')

@section('title', 'Order History Show')

@section('content')
<div class="go-back-link-container">
        <a href="{{route('users.personaldata')}}" class="go-back-link"><i class="fa-solid fa-left-long"></i>Go Back</a>
    </div>
<div class="order-history-show-container">
    <div class="order-history-show-products-all-info">
    <h2>Products</h2>
   <div class="order-history-show-products">
    
    <div class="order-history-show-product-1">
            <img src="{{ asset('images/bracelets/armband_met_glitterrand.jpg') }}" >
            <div>
            <p>Product Name 1</p>
            <p>Price: $10.00</p>
            <p>Quantity: 1</p>
            </div>
    </div>
    <div class="order-history-show-product-2">
            <img src="{{ asset('images/bracelets/armband_met_glitterrand.jpg') }}">
            <div>
            <p>Product Name 2</p>
            <p>Price: $30</p>
            <p>Quantity: 2</p>
            </div>
    </div> 
    
   </div>
    </div>
<div class="order-history-show-details-all-info">
        <h2>Order Details</h2>
   <div class="order-history-show-details">
        <p>Order Number: </p>
        <p>Order Date: </p>
        <p>Recipient’s Name:</p>
        <p>Addres</p>
        <p>Total Products:</p>
        <p>Total Price: </p>
   </div>
</div>
</div>
@endsection