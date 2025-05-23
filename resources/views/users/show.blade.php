@extends('layout.master_layout')

@section('title', 'accountpage')

@section('content')
<div class="welcome_user">
    <h1>Welcome (username) to our team</h1>
    <h2>We appreciate you for choosing us!</h2>
    
    <div id="icon_welcome">
        <img src="{{ asset('images/icons/personal_data.png') }}" alt="Personal Data Icon">
        <img src="{{ asset('images/icons/Cart_Order_History.png') }}" alt="Order History Icon">
        <img src="{{ asset('images/icons/log-out.png') }}" alt="Logging Out Icon">
    </div>
</div>
@endsection