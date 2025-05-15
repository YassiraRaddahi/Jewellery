@extends('layout.master_layout')

@section('title', 'Home')


@section('content')

<div class="container">

    <nav id="products-nav">
        <ul>
            <li><a href="#">Sale</a></li>
            <li><a href="{{route('category.index', 'ring')}}">Rings</a></li>
            <li><a href="{{route('category.index', 'bracelet')}}">Bracelet</a></li>
            <li><a href="{{route('category.index', 'necklace')}}">Necklace</a></li>
            <li><a href="{{route('category.index', 'earring')}}">Earrings</a></li>
            <li><a href="{{route('category.index', 'bracelet')}}">Show all</a></li>
        </ul>
    </nav>

    <div class="products-home-container">
        <div class="product-home">
            <a href="#"><img src="{{asset('images/rings/enkel_twisted_met_dubbel_twisted_ring.jpg')}}" alt="Rings"></a>
        </div>
         <div class="product-home">
            <a href="#"><img src="{{asset('images/bracelets/sierlijke_armband_rotated.jpg')}}" alt="Bracelets"></a>
        </div>
        <div class="product-home">
            <a href="#"><img src="{{asset('images/necklaces/sierlijke_bloemenketting.jpg')}}" alt="Necklaces"></a>
        </div>
        <div class="product-home">
            <a href="#"><img src="{{asset('images/earrings/elegante_oorbellen.jpg')}}" alt="Earrings"></a>
        </div>
    </div>
</div>    

@endsection