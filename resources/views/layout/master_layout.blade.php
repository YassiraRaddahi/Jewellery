<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="https://kit.fontawesome.com/5c3b708ee0.js" crossorigin="anonymous"></script>
</head>
<body>
    @if(session('success-account-creation'))
        <div class="alert-success">
            {{ session('success-account-creation') }}
        </div>
    @endif
    @if(session('success-account-deletion'))
        <div class="alert-success">
            {{ session('success-account-deletion') }}
        </div>
    @endif

    <header>
       <div id="logo-container">
        <a href="{{route('home')}}">
            <img id="logo" src="{{asset('images/Logo.png')}}" alt="logo">
        </a>
       </div>
        <nav id="header-nav">
            <ul>
                <li><a href="{{route('home')}}">Home</a></li>
                <li><a href="{{ route('ourstory') }}">Our story</a></li>
                <li><a href="{{ route('contact')}}">Contact</a></li>
            </ul>
        </nav>
    
        <div class="icon-buttons">
            <ul>
                  <li><a href="{{route('search', ['from' => 'searchicon']) }}"><i class="fa-solid fa-magnifying-glass fa-lg" ></i></a></li>
                <li>
                    <a class="cart-link" href="{{ route('cart.show')}}">
                        <i class="fa-solid fa-cart-shopping fa-lg"></i>
                        @if(countItemsCart() > 0)
                            <span class="cart-icon-number"><b>{{countItemsCart()}}</b></span>
                        @endif
                    </a>
                </li>
                <li><a href="{{ route('loginForm') }}"><i class="fa-regular fa-circle-user fa-lg"></i></a></li>
            </ul>
        </div>
    </header>

    <main>
        <div class="container">
            @yield('content')
        </div>
    </main>

    <footer>
    
        <p>&copy; 2025 Moonie Studio</p>
        <span><a href="{{ route('privacy')}}">Privacy Policy</a></span>
    </footer>

    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>