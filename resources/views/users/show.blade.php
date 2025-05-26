@extends('layout.master_layout')

@section('title', 'accountpage')

@section('content')
<div class="welcome_user">
    <div id="welcome_message_account">
        <h1>Welcome (username) to our team</h1>
        <h2>We appreciate you for choosing us!</h2>
    </div>
    <div id="icon_welcome">
        <img src="{{ asset('images/icons/Cart_Order_History.png') }}" alt="Personal Data Icon"></a>
        <a> <img src="{{ asset('images/icons/personal_data.png') }}" alt="Order History Icon"></a>
        <a> <img src="{{ asset('images/icons/log-out.png') }}" alt="Logging Out Icon"></a>
    </div>
</div>
@endsection