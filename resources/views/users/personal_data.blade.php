@extends('layout.master_layout')
@section('title', 'Personal Data')
@section('content')
    <h1>Personal data & address details</h1>

    <div class="personal_data">
        <div class="information_container">
            <div class="information_header">
                <h3>Personal information</h3>
            </div>
            <div class="information_details">
                <div>
                    <p>{{$user->first_name . " " . ($user->infix ? $user->infix . " " : "") . $user->last_name}}</p>
                    
                    @if($user->phone)
                        <p>{{$user->phone}}</p>
                    @else
                        <p class="user-not-provided-data">Phone number</p>
                    @endif
                </div>
                <div class="update_icon_container">
                    <a href="#"><i class="update_icon fa-solid fa-pen fa-lg"></i></a>
                </div>
            </div>
        </div>
        <div class="information_container">
            <div class="information_header">
                <h3>Log in information</h3>
            </div>
            <div class="information_details">
                <div>
                <p>{{$user->email}}</p>
                <p>{{str_repeat('●', 15)}} </p>
                </div>
                <div class="update_icon_container">
                    <a href="#"><i class="update_icon fa-solid fa-pen fa-lg"></i></a>
                </div>
            </div>
        </div>
        <div class="information_container">
            <div class="information_header">
                <h3>Address details</h3>
            </div>
            <div class="information_details">
                <div>
                    @if($user->address)
                        <p>{{$user->address}}</p>
                    @else
                        <p class="user-not-provided-data">Address</p>
                    @endif

                    @if($user->zipcode)
                        <p>{{$user->zipcode}}</p>
                    @else
                        <p class="user-not-provided-data">ZIP code</p>
                    @endif

                    @if($user->city)
                        <p>{{$user->city}}</p>
                    @else
                        <p class="user-not-provided-data">City</p>
                    @endif
                    @if($user->country)
                        <p>{{$user->country}}</p>
                    @else
                        <p class="user-not-provided-data">Country</p>
                    @endif
                </div>
                <div class="update_icon_container">
                    <a href="#"><i class="update_icon fa-solid fa-pen fa-lg"></i></a>
                </div>
            </div>
        </div>
    </div>
@endsection