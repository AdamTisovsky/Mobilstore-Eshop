@extends('layouts/layout')

@section('title', 'MOBILSTORE.SK - Produkty')

@section('content')

<section class="filtracia">
    <div class="containerf">
        <form action="{{ route('products') }}" method="GET" class="filter-bar">
            <div class="filter-group">
                <label for="price-min">Cena: </label>
                <input type="number" id="price-min" name="price_min" placeholder="Min">
                <input type="number" id="price-max" name="price_max" placeholder="Max">
            </div>

            <div class="filter-group">
                <label for="brand">Značka: </label>
                <select name="brand" id="brand-select">
                    <option value="">Všetko</option>
                    <option value="1">Apple</option>
                    <option value="2">Samsung</option>
                    <option value="3">Sony</option>
                </select>
            </div>

            <div class="filter-group">
                <label for="color">Farba: </label>
                <select name="color" id="color-select">
                    <option value="">Všetko</option>
                    <option value="Black">Čierna</option>
                    <option value="White">Biela</option>
                    <option value="Blue">Modrá</option>
                </select>
            </div>

            <div class="filter-group">
                <label for="storage_gb">Úložisko: </label>
                <select name="storage_gb" id="storage-select">
                    <option value="">Všetko</option>
                    <option value="64">64GB</option>
                    <option value="128">128GB</option>
                    <option value="256">256GB</option>
                </select>
            </div>

            <div class="filter-group">
                <label for="type">Typ: </label>
                <select name="type" id="type-select">
                    <option value="">Všetko</option>
                    <option value="1">Mobil</option>
                    <option value="2">Monitor</option>
                    <option value="3">Televízor</option>
                </select>
            </div>

            <button type="submit" class="filter-button">Zobraziť produkty</button>
        </form>
    </div>
</section>

<section id="heroProducts">
    @foreach (\App\Models\Category::all() as $category)
        <a href="{{ route('products', ['category_id' => $category->id]) }}">
            <button class="btnprodukty">
                <img class="btnimg" src="{{ asset('images/' . $category->image_path) }}" alt="{{ $category->name }}"> 
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
                        <!-- Formulár na pridanie do košíka -->
                        <form action="{{ route('cart.add', $product->id) }}" method="POST">
                          @csrf
                         <button type="submit" class="btn-cart">
                          Pridať do košíka <span><i class="fas fa-shopping-cart"></i></span>
                         </button>
                         </form>

                        <!-- Formulár na okamžitý nákup -->
                        <form action="{{ route('cart.buyNow', $product->id) }}" method="POST">
                        @csrf
                        <button type="submit" class="btn-cart">
                        Kúpiť teraz <span><i class="fas fa-shopping-cart"></i></span>
                        </button>
                        </form>
                        </div>
                        
                    </div>
                    
                    <div class="product-info">
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
                        
                    </div>
                        
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
