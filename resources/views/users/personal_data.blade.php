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
                    <p>Name</p>
                    <p>phone number</p>
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
                <p>E-mail</p>
                <p>Password</p>
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
                <p>Street , house number</p>
                <p>Zip code</p>
                <p>City</p>
                <p>Country</p>
                </div>
                <div class="update_icon_container">
                    <a href="#"><i class="update_icon fa-solid fa-pen fa-lg"></i></a>
                </div>
            </div>
        </div>
    </div>
@endsection