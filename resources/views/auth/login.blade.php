@extends('layout.master_layout')
   
@section('title', 'Log in')

@section('content')

<div class="login_group">

    <h1>Log in</h1>
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <div>
            <label for="email">Email Address:</label><hr>
                @if($errors->has('email'))
                    <p class="error-message">
                        {{$errors->first('email')}}
                    </p>
                @endif
            <input type="email" id="email" name="email" value="{{ old('email') }}" required>
        </div>
        <div>
            <label for="password">Password:</label><hr>
                @if($errors->has('password'))
                    <p class="error-message">
                        {{$errors->first('password')}}
                    </p>
                @endif
            <input type="password" id="password" name="password" required>
                @if($errors->has('general'))
                    <p class="error-message">
                        {{$errors->first('general')}}
                    </p>
                @endif
        </div>
        <div id="log-in-button">
            <button type="submit">Log in</button>
        </div>
    </form>

    <p>Don't have an account? <a href="{{ route('registerForm') }}">Register here</a></p>
</div>
@endsection