@extends('layouts/layout')

@section('title', 'MOBILSTORE.SK - Produkty')

@section('content')
<div class="product-detail-container">
    <div class="product-image">
        @if($product->images->isNotEmpty())
            <img src="{{ asset('images/'.$product->images->first()->image_path) }}" alt="{{ $product->name }}">
        @else
            <img src="{{ asset('images/default.jpg') }}" alt="No Image Available">
        @endif
    </div>
    
    <div class="product-info">
        <h1>{{ $product->name }}</h1>
        <p>{{ $product->description }}</p>
        
        <div class="price">€{{ number_format($product->price, 2) }}</div>
        <div class="stock">Na sklade: {{ $product->stock }} kusov</div>
        
        <form action="{{ route('cart.add', $product->id) }}" method="POST">
            @csrf
            <button class="add-to-cart-btn" type="submit"><strong>Pridať do košíka</strong></button>
        </form>
        
        <a class="DetailPageBack" href="{{ route('products') }}" class="back-btn"><strong>Späť na produkty</strong></a>
    </div>
</div>

<!-- Sekcia špecifikácií -->
@if(isset($product_attributes) && count($product_attributes) > 0)
    <div class="product-specifications">
        <h2>Parametre</h2>
        <ul>
            @foreach($product_attributes as $attribute)
                <li><strong>{{ $attribute['attribute_name'] }}:</strong> {{ $attribute['attribute_value'] }}</li>
            @endforeach
        </ul>
    </div>
@endif
@endsection

<script>
    fetch('{{ asset('detail.json') }}')
    .then(response => response.json())
    .then(data => {
        console.log(data);
    });
</script>

@section('scripts')
<script>
    let product = @json($product);
    console.log(product);
</script>
@endsection
