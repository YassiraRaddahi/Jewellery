<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="https://kit.fontawesome.com/5c3b708ee0.js" crossorigin="anonymous"></script>
</head>
<body>
    
    <header>
       <div id="foto">
        <a href="#">
            <img src="images/Logo.png" alt="logo">
        </a>
       </div>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Our story</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    
        <div class="icon-buttons">
            <ul>
                <li><a href="#"><i class="fa-solid fa-magnifying-glass fa-lg"></i></a></li>
                <li><a href="#"><i class="fa-solid fa-cart-shopping fa-lg"></i></a></li>
                <li><a href="login"><i class="fa-regular fa-circle-user fa-lg"></i></a></li>
            </ul>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
    
        <p>&copy; 2025 Moonie Studio</p>
        <li><a href="#">Privacy Policy</a></li>
    </footer>
</body>
</html>