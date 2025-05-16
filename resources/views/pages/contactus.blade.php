@extends('layouts.master_layout')
@section('title', 'Contact Us')
@section('content')
<div id="contactus">
    <h1 class='title'>Contact Us</h1>
    <p>E-mail: moonie@studio.nl</p>
    <p>Phone: +31 6 12345678</p>

</div>
<div id="contactus-image">
    <img src="{{ asset('images/dubbel_twisted_oorbellen_dik_met_enkel_twisted_oorbellen.jpg') }}" alt="Contact Us" class="contactus-image">    
</div>
@endsection
