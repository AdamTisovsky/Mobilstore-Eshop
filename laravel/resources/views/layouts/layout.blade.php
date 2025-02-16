<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'MOBILSTORE.SK')</title>

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset('css/Style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <!-- Custom Styles -->
    <style>
        body {
            background-size: 1000px; 
            background-position: left; 
            background-repeat: no-repeat; 
            height: 100vh;
        }
    </style>

    @yield('custom-css')
</head>
<body>

    <!-- Header Section -->
    <section id="header">
    <a href="{{ url('/home') }}">
        <img id="logoimg" src="{{ asset('images\logo43.png') }}" class="logo" alt="Logo">
    </a>

        <form>
            <div class="search">
                <span class="material-symbols-outlined">search</span>
                <input class="search-input" type="search" placeholder="Hladaj">
            </div>
        </form>

        <div>
            <ul id="navbar">
                <li><a href="{{ url('/home') }}">DOMOV</a></li>
                <li><a href="{{ url('/products') }}">PRODUKTY</a></li>
                
                @auth
                    @if(auth()->user()->is_admin)
                        <li><a href="{{ url('/adminpanel') }}">ADMIN</a></li>
                        <li><a href="{{ url('/addproduct') }}">ADDPRODUCT</a></li>
                    @endif
                 @endauth
                <li><a href="{{ url('/info') }}">INFO</a></li>
                @guest
                <!-- Ak používateľ nie je prihlásený -->
                <li><a href="{{ route('login') }}">PRIHLÁSIŤ SA</a></li>
                @else
                <!-- Ak je používateľ prihlásený -->
                <li><a href="{{ url('/profilepage') }}">PROFIL</a></li>
                @endguest
                <li><a href="{{ url('/cart') }}">KOŠIK</a></li>
            </ul>
        </div>
    </section>

    <!-- Main Content Section -->
    <main>
        @yield('content')
    </main>

    <!-- Footer Section -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h4>Firma</h4>
                    <ul>
                    <li><a href="{{ url('/info') }}">O nás</a></li>
                        <li><a href="#">Naše služby</a></li>
                        <li><a href="#">privacy policy</a></li>
                        <li><a href="#">affiliate program</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Info</h4>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">shipping</a></li>
                        <li><a href="#">returns</a></li>
                        <li><a href="#">order status</a></li>
                        <li><a href="#">payment options</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>online shop</h4>
                    <ul>
                        <li><a href="#">Mobily</a></li>
                        <li><a href="#">Monitory</a></li>
                        <li><a href="#">Notebooky</a></li>
                        <li><a href="#">Televízie</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Sociálne siete</h4>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    @yield('custom-js')
</body>
</html>