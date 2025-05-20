@extends('layout.master_layout')
   
@section('title', 'Create Account')

@section('content')
<div>
    <h1>Create Account</h1>
    <form action="{{ route('register') }}" method="POST">
        @csrf
        <div>
            <label for="name">Name:</label><hr>
            <input type="text" id="name" name="name" required>
        </div>
        <div>
            <label for="email">Email:</label><hr>
            <input type="email" id="email" name="email" required>
        </div>
        <div>
            <label for="password">Password:</label><hr>
            <input type="password" id="password" name="password" required>
        </div>
        <button type="submit">Create Account</button>
    </form>

    <p>Already have an account? <a href="{{ route('login') }}">Log in here</a></p>
</div>
@endsection