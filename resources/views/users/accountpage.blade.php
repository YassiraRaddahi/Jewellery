@extends('layout.master_layout')

@section('title', 'accountpage')

@section('content')
<div class="general-accountpage-container">
    <div class="welcome-message-account-container">
        <h1>Welcome (username) to our team</h1>
        <h2>We appreciate you for choosing us!</h2>
    </div>
    <div class="icons-general-accountpage-container">
        <div>
            <a href="#"><img id="order-history-icon" src="{{ asset('images/icons/Cart_Order_History.png') }}" alt="Order History Icon"></a>
            <p>Order History</p>
        </div>
        <div>
            <a href="#"><img id="personal-data-icon" src="{{ asset('images/icons/personal_data.png') }}" alt="Personal Data Icon"></a>
            <p>Personal Data</p>
        </div>
        <div>
            <a href="#"><img id="logout-icon"src="{{ asset('images/icons/log-out.png') }}" alt="Logging Out Icon"></a>
            <p>Log Out</p>
        </div>
    </div>
</div>
@endsection