@extends('layout.master_layout')
   
@section('title', 'Create Account')

@section('content')
<div class="create_account_container">
    <h1>Create Account</h1>
    <form action="{{ route('users.create') }}" method="POST">
        @csrf

        <div>
            <label for="name">First Name:</label>
            <input type="text" id="name" name="name" required>
        </div>

        <div>
            <label for="insertion">Insertion:</label>
            <input type="text" id="insertion" name="insertion" required>
        </div>

        <div>
            <label for="surname">Last Name:</label>
            <input type="text" id="surname" name="surname" required>
        </div>

        <div>
            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" required>
        </div>

        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div id ="button_create_account">
            <button type="submit">Create</button>
        </div>
    </form>

    <p>Already have an account? <a href="{{ route('login') }}">Log in here</a></p>
</div>

@endsection