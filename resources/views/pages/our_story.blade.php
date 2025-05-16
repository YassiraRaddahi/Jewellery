@extends('layout.master_layout')
   
@section('title', 'Our Story')

@section('content')
<div id="ourstory">
   <div id="ourstory_text">
    <h1>Our story</h1>
    <p>Hello from Studio Moonie! We are a small group of passionate jewelry makers who like making delicate and
         personalized jewelry for meaningful moments such as weddings, engagements, and other milestones.</p>
         <hr>
         <p>Our pieces are thoughtfully designed and one of a kind. You can be assured that no two pieces
             are ever alike, making it even more special as it is passed on from generation to generation.</p>
    </div>
    <div id="ourstory_image">
        <img src="{{asset('images/sierlijke_oorbellen_in_sierlijk_armband.jpg')}}" alt="Jewelry Image">
    </div>
    </div>
@endsection