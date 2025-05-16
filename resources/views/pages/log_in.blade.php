@extends('layout.master_layout')
   
@section('title', 'Log in')

@section('content')
<div class="log_group">
    <h1>Log in</h1>
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <div>
            
            <label for="email">Email:</label><hr>
            <input type="email" id="email" name="email" required>
        </div>
        <div>
            <label for="password">Password:</label><hr>
            <input type="password" id="password" name="password" required>
        </div>
        <button type="submit">Log in</button>
    </form>

    <p>Don't have an account? <a href="#">Register here</a></p>
</div>
@endsection