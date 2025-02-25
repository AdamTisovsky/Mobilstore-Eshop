@extends('layouts/layout')

@section('title', 'MOBILSTORE.SK - Produkty')

@section('content')

<section class="filtracia">
    <div class="containerf">
        <form action="{{ route('products') }}" method="POST" class="filter-bar">
        @csrf
        <div class="filter-group">
                <label for="price-min">Cena: </label>
                <input type="number" name="price_min" id="price_min" value="{{ request('price_min') }}" min="0" step="0.01" placeholder="Min">
                <input type="number" name="price_max" id="price_max" value="{{ request('price_max') }}" min="0" step="0.01" placeholder="Max">

            </div>

            <div class="filter-group">
                <label for="brand">Značka: </label>
                <select name="brand" id="brand-select">
                    <option value="" {{ request('brand') == '' ? 'selected' : '' }}>Všetko</option>
                    @foreach($brands as $brand)
                        <option value="{{ $brand }}" {{ request('brand') == $brand ? 'selected' : '' }}>
                            {{ $brand }}
                        </option>
                    @endforeach
                </select>
            </div>



            <input type="hidden" name="category_id" value="{{ $category_id }}">

            <button type="submit" class="filter-button">Zobraziť produkty</button>
        </form>
    </div>
</section>

<section id="heroProducts">
    @foreach (\App\Models\Category::all() as $category)
        @php
            $categoryImages = [
                1 => '13-removebg-preview.png',
                2 => 'ae-qled-qn90b-qa75qn90bauxzn-531523268-removebg-preview.png',
                3 => 'samsung-monitor-led-27-removebg-preview.png',
                4 => 'asus rogue laptop.png',
            ];
            
            $imagePath = $categoryImages[$category->id] ?? 'default.png'; // Ak obrázok neexistuje, použije sa default.png
        @endphp

        <a href="{{ route('products', ['category_id' => $category->id]) }}">
            <button class="btnprodukty">
                <img class="btnimg" src="{{ asset('images/' . $imagePath) }}" alt="{{ $category->name }}"> 
                <p class="txtbtnproduct">{{ strtoupper($category->name) }}</p>
            </button>
        </a>
    @endforeach
</section>



<div class="products">
    <div class="productcontainer">
        <h1 class="lg-title">Produkty</h1>

        <div class="Product-items">
            @foreach ($products as $product)
                <div class="product">
                    
                    <div class="product-content">
                    <a href="{{ route('product.show', $product->id) }}" class="product-name">
                    <div class="product-img">
                    @if ($product->images->isNotEmpty())
                    <img src="{{ asset('images/' . $product->images->first()->image_path) }}" alt="{{ $product->name }}">
                    @else
                    <img src="{{ asset('images/default-placeholder.jpg') }}" alt="No image available">
                    @endif
                    </div>
                    </a>
                        <div class="product-btns">
                        
                        <form action="{{ route('cart.add', $product->id) }}" method="POST">
                          @csrf
                         <button type="submit" class="btn-cart">
                          Pridať do košíka <span><i class="fas fa-shopping-cart"></i></span>
                         </button>
                         </form>

                       
                        <form action="{{ route('cart.buyNow', $product->id) }}" method="POST">
                        @csrf
                        <button type="submit" class="btn-cart">
                        Kúpiť teraz <span><i class="fas fa-shopping-cart"></i></span>
                        </button>
                        </form>
                        </div>
                        
                    </div>
                    
                    <div class="product-info">
                    <a href="{{ route('product.show', $product->id) }}" class="product-name">
                        <div class="product-info-top">
                            <h2 class="sm-tittle">Produkt</h2>
                            <div class="rating">
                                @for ($i = 0; $i < 5; $i++)
                                    <span><i class="fas fa-star {{ $i < $product->rating ? 'active' : '' }}"></i></span>
                                @endfor
                            </div>
                        </div>
                        <a href="#" class="product-name">{{ $product->name }}</a>
                        <p class="product-price">$ {{ number_format($product->price, 2) }}</p>
                        </a>
                        
                    </div>
                        
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
