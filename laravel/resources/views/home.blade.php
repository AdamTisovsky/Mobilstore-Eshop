@extends('layouts/layout')

@section('title', 'Home - MOBILSTORE.SK')

@section('content')
<section id="Homepage">
    <img class="homepageimg" src="{{ asset('images/mobily-do-100-eur-removebg.png') }}">
    <div class="col-2">
        <p class="homepagetext">PRESKÚMAJTE NAŠE PRODUKTY</p>
        <a href="{{ url('/products') }}">
            <button onclick="Klik()" class="homepagebutton">PRODUKTY</button>
        </a>
    </div>
</section>
@endsection

@section('custom-js')
<script>
    function Klik() {
        // Add functionality here if needed
    }
</script>
@endsection