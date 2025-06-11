@extends('layout.master_layout')
   
@section('title', 'Create Account')

@section('content')
<div class="create_account_container">
    <h1>Create an Account</h1>
    <form action="{{ route('register') }}" method="POST">
        @csrf

        <div class="create-account-form-group">
            <label for="first_name">First Name:</label>
            <input type="text" id="first_name" name="first_name" value="{{old('first_name')}}" required>
            @if($errors->has('first_name'))
                <p class="error-message">
                    {{$errors->first('first_name')}}
                </p>
            @endif
        </div>

        <div class="create-account-form-group">
            <label for="infix">Infix:</label>
            <input type="text" id="infix" name="infix" value="{{old('infix')}}">
             @if($errors->has('infix'))
                <p class="error-message">
                    {{$errors->first('infix')}}
                </p>
            @endif
        </div>

        <div class="create-account-form-group">
            <label for="last_name">Last Name:</label>
            <input type="text" id="last_name" name="last_name" value="{{old('last_name')}}" required>
             @if($errors->has('last_name'))
                <p class="error-message">
                    {{$errors->first('last_name')}}
                </p>
            @endif
        </div>

        <div class="create-account-form-group">
            <label for="email">Email Address:</label><br>
            <input type="email" id="email" name="email" value="{{old('email')}}" required>
             @if($errors->has('email'))
                <p class="error-message">
                    {{$errors->first('email')}}
                </p>
            @endif
        </div>

        <div class="create-account-form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            @if($errors->has('password'))
                <p class="error-message">
                    {{$errors->first('password')}}
                </p>
            @endif
        </div>

        <div class="create-account-form-group">
            <label for="password_confirmation">Confirm Password:</label>
            <input type="password" id="password_confirmation" name="password_confirmation" required>
        </div>

        @if($errors->has('general'))
            <p class="error-message">
                {{$errors->first('general')}}
            </p>
        @endif

        <div id="button-create-account-container">
            <button type="submit">Create</button>
        </div>
    </form>

    <p>Already have an account? <a href="{{ route('loginForm') }}">Log in here</a></p>
</div>

@endsection