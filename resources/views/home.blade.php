@extends('layout.master_layout')

@section('title', 'Home')


@section('content')

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