@extends('layout.master_layout')
@section('title', 'Contact Us')
@section('content')


<div class="contactus">
    <div id="contactus-text">
        <h1 class='title'>Contact Us</h1>
        <p>E-mail: moonie@studio.nl</p>
        <p>Phone: +31 6 12345678</p>
    </div>
    <div class="contactus-image">
        <img src="{{ asset('images/dubbel_twisted_oorbellen_dik_met_enkel_twisted_oorbellen.jpg') }}" alt="Contact Us" class="contactus-image">    
    </div>
</div>
@endsection
