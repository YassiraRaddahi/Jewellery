@extends('layout.master_layout')

@section('title', 'Home')


@section('content')

    <nav id="products-nav">
        <ul>
            <li><a href="#">Sale</a></li>
            <li><a href="{{route('category.index', 'rings')}}">Rings</a></li>
            <li><a href="{{route('category.index', 'bracelets')}}">Bracelet</a></li>
            <li><a href="{{route('category.index', 'necklaces')}}">Necklace</a></li>
            <li><a href="{{route('category.index', 'earrings')}}">Earrings</a></li>
            <li><a href="{{route('category.index', 'bracelets')}}">Show all</a></li>
        </ul>
    </nav>

    <div class="products-container">
        <div class="product-home">
            <a href="{{route('category.index', 'rings')}}"><img src="{{asset('images/rings/enkel_twisted_met_dubbel_twisted_ring.jpg')}}" alt="Rings"></a>
        </div>
         <div class="product-home">
            <a href="{{route('category.index', 'bracelets')}}"><img src="{{asset('images/bracelets/sierlijke_armband_rotated.jpg')}}" alt="Bracelets"></a>
        </div>
        <div class="product-home">
            <a href="{{route('category.index', 'necklaces')}}"><img src="{{asset('images/necklaces/sierlijke_bloemenketting.jpg')}}" alt="Necklaces"></a>
        </div>
        <div class="product-home">
            <a href="{{route('category.index', 'earrings')}}"><img src="{{asset('images/earrings/elegante_oorbellen.jpg')}}" alt="Earrings"></a>
        </div>
    </div>  

@endsection