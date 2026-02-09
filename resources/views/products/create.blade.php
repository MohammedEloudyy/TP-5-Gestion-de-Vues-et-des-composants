@extends('layouts.app')

@section('content')

<div class="card shadow-sm">
    <div class="card-header">
        <h5>Ajouter un produit</h5>
    </div>

    <div class="card-body">

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('products.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label>Title</label>
                <input type="text" name="title" value="{{ old('title') }}"
                       class="form-control @error('title') is-invalid @enderror">

                @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label>Price</label>
                <input type="number" step="0.01" name="price" value="{{ old('price') }}"
                       class="form-control @error('price') is-invalid @enderror">

                @error('price')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label>Description</label>
                <textarea name="description" rows="4"
                          class="form-control @error('description') is-invalid @enderror">{{ old('description') }}</textarea>

                @error('description')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <button class="btn btn-primary">Ajouter</button>

        </form>
    </div>
</div>

@endsection
