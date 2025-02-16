@extends('layouts/layout')

@section('content')
<div class="container mt-5">
    <h1 class="AddProducth">Pridať produkt</h1>
    
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    
    <form id="productForm" class="mt-4" action="{{ route('addproduct') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="productName" class="adminProduct">Názov Produktu</label>
            <input type="text" class="form-control" id="productName" name="name" value="{{ old('name') }}" required>
            @error('name')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        
        <div class="mb-3">
            <label for="productDescription" class="adminProduct">Popis Produktu</label>
            <textarea class="form-control" id="productDescription" name="description" rows="3" required>{{ old('description') }}</textarea>
            @error('description')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        
        <div class="mb-3">
            <label for="productPrice" class="adminProduct">Cena ($)</label>
            <input type="number" class="form-control" id="productPrice" name="price" value="{{ old('price') }}" required>
            @error('price')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        
        <div class="mb-3">
            <label for="productImage" class="adminProduct">Obrázok produktu</label>
            <input type="file" class="form-control-file" id="productImage" name="image" accept="image/*" required>
            @error('image')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        
        <button type="submit" class="Addproductbtn">Pridať produkt</button>
    </form>
</div>
@endsection
