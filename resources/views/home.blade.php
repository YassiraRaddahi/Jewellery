@extends('layout.master_layout')

@section('title', 'Home')


@section('content')

<div class="homepage_banner">
    <div id="homepage_zoekbar">
        <div id="zoekbalk">
            <input type="text" placeholder="Search for a product...">
            <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            <h1>Make milestones memorable</h1>
        </div>
        <div id="sierlijke_lifestyle">
            <img src="{{asset('images/lifestyle_photos/sierlijke_oorbellen_met_sierlijke_bloemenketting.jpg')}}" alt="Homepage Banner">
        </div>
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