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
                    @if(is_object($item) && isset($item->product) && $item->product->images->isNotEmpty()) 
                        <img src="{{ asset('images/' . $item->product->images->first()->image_path) }}" class="cart-product-img" alt="{{ $item->product->name }}">
                    @elseif(is_array($item) && isset($item['image']))
                        <img src="{{ asset('images/' . $item['image']) }}" class="cart-product-img" alt="{{ $item['name'] }}">
                    @else
                        <img src="{{ asset('images/default.jpg') }}" class="cart-product-img" alt="No Image">
                    @endif
                </td>
                <td data-label="Product Name">
                    @if(is_object($item))
                        {{ $item->product->name }}
                    @else
                        {{ $item['name'] }}
                    @endif
                </td>
                <td data-label="Price">
                    @if(is_object($item))
                        €{{ number_format($item->product->price, 2) }}
                    @else
                        €{{ number_format($item['price'], 2) }}
                    @endif
                </td>
                <td data-label="Quantity">
                    {{ $item['quantity'] ?? $item->quantity }}
                </td>
                <td data-label="Subtotal">
                    @if(is_object($item))
                        €{{ number_format($item->product->price * $item->quantity, 2) }}
                    @else
                        €{{ number_format($item['price'] * $item['quantity'], 2) }}
                    @endif
                </td>
                <td data-label="Actions" class="cart-actions">
                    <form action="{{ route('cart.remove', is_object($item) ? $item->id : $item['product_id']) }}" method="POST">
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
    <a href="{{ route('platba', ['totalPrice' => $totalPrice]) }}" class="checkout-btn">
        Dokončiť objednávku
    </a>
</div>
@endsection
