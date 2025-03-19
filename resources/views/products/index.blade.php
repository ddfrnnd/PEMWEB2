@extends('layouts.app')

@section('content')
<h1 class="mb-4">Daftar Produk</h1>
<div class="row">
    @foreach ($products as $product)
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{ $product->image ?? 'https://via.placeholder.com/200' }}" class="card-img-top" alt="{{ $product->name }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $product->name }}</h5>
                    <p class="card-text">{{ Str::limit($product->description, 50) }}</p>
                    <p class="card-text"><strong>Rp {{ number_format($product->price, 0, ',', '.') }}</strong></p>
                    <a href="{{ route('products.show', $product->id) }}" class="btn btn-primary">Detail</a>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection
