@extends('layouts.app')

@section('content')
    <h2>{{ $product['title'] }}</h2>
    <p><strong>Prix:</strong> {{ $product['price'] }}</p>
    <p><strong>Description:</strong> {{ $product['description'] }}</p>
    <img src="{{ asset('images/' . $product['image']) }}" alt="{{ $product['title'] }}" class="img-fluid">
    <br>
    <a href="{{ route('products.index') }}" class="btn btn-secondary mt-3">Retour aux produits</a>
@endsection