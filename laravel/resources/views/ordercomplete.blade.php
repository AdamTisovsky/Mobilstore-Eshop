@extends('layouts.layout')

@section('title', 'MOBILSTORE.SK - Objednávka dokončená')

@section('content')
<section class="ordercomplete">
    <h1 class="ordercompleteh1">Objednávka dokončená</h1>
    <p class="ordercompletep">Na váš e-mail vám prišlo potvrdenie objednávky</p>
    <p class="ordercompletep">Váš E-mail: {{ auth()->user()->email }}</p>
    
    @if(isset($order))
        <p class="ordercompletep">Číslo objednávky: {{ $order->id }}</p>
    @else
        <p class="ordercompletep">Žiadna objednávka nebola nájdená.</p>
    @endif

    <a href="{{ route('home') }}"><button class="buttonordercomplete">Domov</button></a>
</section>
@endsection
