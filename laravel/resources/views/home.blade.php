@extends('layouts/layout')

@section('title', 'Home - MOBILSTORE.SK')

@section('content')
<section class="homepage">
    <div class="homepageform">
        <h1 class="homepagetext">PRESKÚMAJ NAŠE PRODUKTY</h1>
        <a href="{{ route('products') }}">
            <button class="homepagebutton">PRODUKTY</button>
        </a>
    </div>
</section>
@endsection
