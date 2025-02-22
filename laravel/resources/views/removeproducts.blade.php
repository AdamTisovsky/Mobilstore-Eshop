@extends('layouts.layout')

@section('title', 'MOBILSTORE.SK - O nás')

@section('content')
<div class="productremove">
    <table id="productTableRemove">
        <thead>
            <tr>
                <th class="removetableth">Názov produktu</th>
                <th class="removetableth">Cena</th>
                <th class="removetableth">Počet kusov na sklade</th>
                <th class="removetableth">Akcia</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <td>{{ $product->name }}</td>
                <td>{{ $product->price }} €</td>
                <td>{{ $product->stock }}</td>
                <td>
                    <form action="{{ route('destroy', $product->id) }}" method="POST" onsubmit="return confirm('Naozaj chcete odstrániť tento produkt?');">
                        @csrf
                        @method('DELETE')
                        <button class="removebutton" type="submit">Odstrániť</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection