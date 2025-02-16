@extends('layouts.layout')

@section('title', 'MOBILSTORE.SK - Profil')

@section('content')
<section id="profile-section">
    <img class="profilpageimg" src="{{ asset('images\7022862.png') }}" alt="">

    <h1 class="profile-heading">Môj profil</h1>

    <div class="profile-card">
    
        <p><strong>Používatelské meno</strong> {{ Auth::user()->username }}</p>
        <p><strong>Email:</strong> {{ Auth::user()->email }}</p>
        <p><strong>Člen od:</strong> {{ Auth::user()->created_at->format('d. F Y') }}</p>
    </div>

    <div class="profile-actions">
        <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button class="btnprofilepage" type="submit">Odhlásiť sa</button>
    </form>
    </div>
</section>
@endsection

