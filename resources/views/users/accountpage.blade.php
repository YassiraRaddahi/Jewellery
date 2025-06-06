@extends('layout.master_layout')

@section('title', 'accountpage')

@section('content')
<div class="general-accountpage-container">
    <div class="welcome-message-account-container">
        <h1>Welcome (username) to our team</h1>
        <h2>We appreciate you for choosing us!</h2>
    </div>
    <div class="icons-general-accountpage-container">
        <a href="#">
            <div>
                <img id="order-history-icon" src="{{ asset('images/icons/Cart_Order_History_2.0.png') }}" alt="Order History Icon">
                <p>Order History</p> 
            </div>
        </a>
        <a href="#">
            <div>
                <img id="personal-data-icon" src="{{ asset('images/icons/personal_data_2.0.png') }}" alt="Personal Data Icon">
                <p>Personal Data</p>
            </div>
        </a>
        <a href="#">
            <div>
                <img id="delete-account-icon"src="{{ asset('images/icons/delete-account.png') }}" alt="Delete Account Icon">
                <p>Delete Account</p>
            </div>
        </a>
        <a href="#">
            <div>
                <div id="logout-icon-container">
                    <img id="logout-icon"src="{{ asset('images/icons/log-out.png') }}" alt="Logging Out Icon">
                </div>
                <p>Log Out</p>
            </div>
        </a>
    </div>
</div>
@endsection