@extends('layout.master_layout')

@section('title', 'Accountpage')

@section('content')
<div class="general-accountpage-container">
    <div class="welcome-message-account-container">
        <h1>Welcome {{$user->first_name}} to our team</h1>
        <h2>We appreciate you for choosing us!</h2>
    </div>
    <div class="icons-general-accountpage-container">
        <a href="{{ route('orders.orderHistoryIndex') }}">
            <div class="accountpage-link-container">
                <img id="order-history-icon" src="{{ asset('images/icons/Cart_Order_History_2.0.png') }}" alt="Order History Icon">
                <p class="accountpage-navigation-p">Order History</p> 
            </div>
        </a>
        <a href="{{ route('users.personaldata') }}">
            <div class="accountpage-link-container">
                <img id="personal-data-icon" src="{{ asset('images/icons/personal_data_2.0.png') }}" alt="Personal Data Icon">
                <p class="accountpage-navigation-p">Personal Data</p>
            </div>
        </a>
        <a href="{{route('users.deleteAccountForm')}}">
            <div class="accountpage-link-container">
                <img id="delete-account-icon"src="{{ asset('images/icons/delete-account.png') }}" alt="Delete Account Icon">
                <p class="accountpage-navigation-p">Delete Account</p>
            </div>
        </a>
        <form action="{{ route('logout')}}" method="POST">
            @csrf
            <button type="submit" class="logout-button">
                <div id="logout-icon-container">
                    <img id="logout-icon" src="{{ asset('images/icons/log-out.png') }}" alt="Logging Out Icon">
                </div>
                <p class="accountpage-navigation-p">Log Out</p>
            </button>
        </form>
    </div>
</div>
@endsection