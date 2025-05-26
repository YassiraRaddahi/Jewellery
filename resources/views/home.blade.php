@extends('layout.master_layout')

@section('title', 'Home')


@section('content')

<div class="homepage_banner">
    <div id="zoekbalk">
        <form action="{{ route('search') }}" method="GET" id="search-form">
            <input name="search" placeholder="Search for a product...">
        </form>
        <button type="submit"><i id="zoekbalk-icon" class="fa-solid fa-magnifying-glass"></i></button>
        <div id="slogan">
            <h1>Make </h1>
            <h1>Milestones</h1>
            <h1>Memorable</h1>
        </div>
    </div>
    <div id="sierlijke_lifestyle">
        <img src="{{asset('images/lifestyle_photos/sierlijke_oorbellen_met_sierlijke_bloemenketting.jpg')}}" alt="Homepage Banner">
    </div>
</div>
@include('layout.nav-products')

<div class="products-container">
    <div class="product-home">
        <a href="{{route('categories.show', 'rings')}}"><img src="{{asset('images/rings/enkel_twisted_met_dubbel_twisted_ring.jpg')}}" alt="Rings"></a>
    </div>
    <div class="product-home">
        <a href="{{route('categories.show', 'bracelets')}}"><img src="{{asset('images/bracelets/sierlijke_armband_rotated.jpg')}}" alt="Bracelets"></a>
    </div>
    <div class="product-home">
        <a href="{{route('categories.show', 'necklaces')}}"><img src="{{asset('images/necklaces/sierlijke_bloemenketting.jpg')}}" alt="Necklaces"></a>
    </div>
    <div class="product-home">
        <a href="{{route('categories.show', 'earrings')}}"><img src="{{asset('images/earrings/elegante_oorbellen.jpg')}}" alt="Earrings"></a>
    </div>
</div>

@endsection