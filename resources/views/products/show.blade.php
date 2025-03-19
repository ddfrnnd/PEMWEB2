@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-6">
        <img src="{{ $product->image ?? 'https://via.placeholder.com/300' }}" class="img-fluid" alt="{{ $product->name }}">
    </div>
    <div class="col-md-6">
        <h2>{{ $product->name }}</h2>
        <p>{{ $product->description }}</p>
        <p><strong>Rp {{ number_format($product->price, 0, ',', '.') }}</strong></p>
        <form action="{{ route('cart.add', $product->id) }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-success">Tambah ke Keranjang</button>
        </form>
    </div>
</div>
@endsection
