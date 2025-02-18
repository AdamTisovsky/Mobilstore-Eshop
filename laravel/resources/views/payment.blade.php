@extends('layouts/layout')

@section('content')
<div class="container">
    
    <form class="order-form" action="{{ route('payment') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="meno" class="form-label">Meno:</label>
            <input type="text" id="meno" name="meno" class="form-input" required>
        </div>
        
        <div class="form-group">
            <label for="priezvisko" class="form-label">Priezvisko:</label>
            <input type="text" id="priezvisko" name="priezvisko" class="form-input" required>
        </div>
        
        <div class="form-group">
            <label for="telefon" class="form-label">Telefónne číslo:</label>
            <input type="tel" id="telefon" name="telefon" class="form-input" required>
        </div>

        @if(!Auth::check())
        <div class="form-group">
            <label for="email" class="form-label">E-mail:</label>
            <input type="email" id="email" name="email" class="form-input" required>
        </div>
        @endif
        
        <div class="form-group">
            <label for="krajina" class="form-label">Krajina:</label>
            <input type="text" id="krajina" name="krajina" class="form-input" required>
        </div>
        
        <div class="form-group">
            <label for="mesto" class="form-label">Mesto:</label>
            <input type="text" id="mesto" name="mesto" class="form-input" required>
        </div>
        
        <div class="form-group">
            <label for="ulica" class="form-label">Ulica:</label>
            <input type="text" id="ulica" name="ulica" class="form-input" required>
        </div>
        
        <div class="form-group">
            <label for="psc" class="form-label">PSČ:</label>
            <input type="text" id="psc" name="psc" class="form-input" required>
        </div>
        
        <div class="form-group">
            <label for="cislo_domu" class="form-label">Číslo domu:</label>
            <input type="text" id="cislo_domu" name="cislo_domu" class="form-input" required>
        </div>
        
        <div class="form-group full-width">
            <label for="payment" class="form-label">Spôsob platby:</label>
            <select id="payment" name="payment" class="form-select" required>
                <option value="dobierka">Hotovosť</option>
                <option value="karta">Platba kartou</option>
            </select>
        </div>
        
        <div class="form-group full-width">
            <label for="shipping" class="form-label">Spôsob dopravy:</label>
            <select id="shipping" name="shipping" class="form-select" required>
                <option value="kurier">Kuriér</option>
                <option value="posta">Pošta</option>
                <option value="osobne">Osobný odber</option>
            </select>
        </div>
        
        <a href="{{ route('ordercomplete') }}"><button type="submit" class="form-button">Potvrdiť objednávku</button></a>
    </form>
</div>
@endsection

