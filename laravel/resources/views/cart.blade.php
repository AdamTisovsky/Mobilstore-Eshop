@extends('layouts/layout')

@section('title', 'MOBILSTORE.SK - Košík')

@section('content')
<div class="container">
    <div class="cart-header">KOŠÍK</div>
    <table>
        <thead>
            <tr>
                <th>Obrázok</th>
                <th>Názov produktu</th>
                <th>Cena</th>
                <th>Počet kusov</th>
                <th>Cena spolu</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($cartItems as $item)
            <tr>
                <td>
                @if($item->product->images->isNotEmpty()) 
                    <img src="{{ asset('images/' . $item->product->images->first()->image_path) }}" class="cart-product-img" alt="{{ $item->product->name }}">
                @else
                    <img src="{{ asset('images/default.jpg') }}" class="cart-product-img" alt="No Image">
                @endif
                </td>
                <td data-label="Product Name">{{ $item->product->name }}</td>
                <td data-label="Price">€{{ number_format($item->product->price, 2) }}</td>
                <td data-label="Quantity">{{ $item->quantity }}</td>
                <td data-label="Subtotal">€{{ number_format($item->product->price * $item->quantity, 2) }}</td>
                <td data-label="Actions" class="cart-actions">
                    <form action="{{ route('cart.remove', $item->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" style="background-color: #dc3545;">Odstrániť</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="cart-total">Spolu: €{{ number_format($totalPrice, 2) }}</div>
    <a href="{{ route('home') }}" class="checkout-btn">Dokončiť objednávku</a>
</div>
@endsection