@extends('layouts/layout')

@section('content')
<section class="product-form-container">
<form class="product-form" action="{{ route('addproduct') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="nazov">Názov produktu:</label>
        <input type="text" id="nazov" name="nazov" required>
    </div>

    <div class="form-group full-width">
        <label for="popis">Popis:</label>
        <textarea id="popis" name="popis" rows="4" required></textarea>
    </div>

    <div class="form-group">
        <label for="cena">Cena (€):</label>
        <input type="number" id="cena" name="cena" step="0.01" required>
    </div>

    <div class="form-group">
        <label for="pocet">Počet kusov na sklade:</label>
        <input type="number" id="pocet" name="pocet" required>
    </div>

    <div class="form-group">
        <label for="category">Kategória produktu:</label>
        <select id="category" name="category" required>
            <option value="1">Mobil</option>
            <option value="2">TV</option>
            <option value="3">Monitor</option>
            <option value="4">Notebook</option>
        </select>
    </div>

    <div id="params-container">
    <div class="form-group">
        <label>Názov parametru:</label>
        <input type="text" name="nazov_param[]" required>
    </div>
    <div class="form-group">
        <label>Hodnota parametru:</label>
        <input type="text" name="hodnota_param[]" required>
    </div>
    </div>
    <button type="button" id="add-param">Pridať parameter</button>

    <div class="form-group full-width">
        <label for="obrazok">Obrázok produktu:</label>
        <input type="file" id="obrazok" name="obrazok" accept="image/*" required>
    </div>

    <button type="submit">Pridať produkt</button>
</form>


<script>
    document.getElementById('add-param').addEventListener('click', function () {
    let container = document.getElementById('params-container');
    let div = document.createElement('div');
    div.innerHTML = `
        <div class="form-group">
            <label>Názov parametru:</label>
            <input type="text" name="nazov_param[]" required>
        </div>
        <div class="form-group">
            <label>Hodnota parametru:</label>
            <input type="text" name="hodnota_param[]" required>
        </div>
    `;
    container.appendChild(div);
    });

</script>
    
@endsection
