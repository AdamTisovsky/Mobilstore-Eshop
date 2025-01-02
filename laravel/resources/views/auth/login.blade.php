{{-- resources/views/auth/login.blade.php --}}
@extends('layouts.layout')

@section('content')
<section id="hero">
    <div class="account-page">
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <img src="{{ asset('images/mobile.png') }}" width="100%">
                </div>

                <div class="col-2">
                    <div class="form-container">
                        <div class="form-btn">
                            <span onclick="login()">Login</span>
                            <span onclick="register()">Register</span>
                            <hr id="Indicator">
                        </div>

                        <!-- Login Form -->
                        <form id="Loginform" action="{{ route('login') }}" method="POST">
                            @csrf
                            <input type="text" name="email" placeholder="Email" required>
                            <input type="password" name="password" placeholder="Heslo" required>
                            <button type="submit" class="btn">Prihlasit sa</button>
                            <a href="{{ route('password.request') }}">Zabudol si heslo?</a>
                        </form> 

                        <!-- Register Form -->
                        <form id="Registerform" action="{{ route('register') }}" method="POST">
                            @csrf
                            <input type="text" name="name" placeholder="Meno" required>
                            <input type="email" name="email" placeholder="Email" required>
                            <input type="password" name="password" placeholder="Heslo" required>
                            <button type="submit" class="btn">Registrovat sa</button>
                        </form> 

                    </div>
                </div>
            </div>
        </div>
    </div>  
</section>
@endsection

@section('custom-js')
<script>
    var Loginform = document.getElementById("Loginform");
    var Registerform = document.getElementById("Registerform");
    var Indicator = document.getElementById("Indicator");

    // Default state: Login form is visible
    Loginform.style.transform = "translateX(0)";
    Registerform.style.transform = "translateX(300px)";
    Indicator.style.transform = "translateX(0)";

    function register() {
        Registerform.style.transform = "translateX(0px)";
        Loginform.style.transform = "translateX(0px)";
        Indicator.style.transform = "translateX(100px)";
    }

    function login() {
        Registerform.style.transform = "translateX(300px)";
        Loginform.style.transform = "translateX(300px)";
        Indicator.style.transform = "translateX(0px)";
    }
    login();
</script>
@endsection