@extends('layout.master_layout')
@section('title', 'accountpage')
@section('content')
<div class="welcome_user">
    <h1>Welcome {{ $user->name }} to our team</h1>
    <h2>We appreciate you for choosing us!</h2>
    
    <div id="icon_welcome">
        <img src="">
    </div>
</div>
@endsection