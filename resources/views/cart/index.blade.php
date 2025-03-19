@extends('layouts.app')

@section('content')
<h1>Keranjang Belanja</h1>

@if (session('cart'))
    <table class="table">
        <thead>
            <tr>
                <th>Produk</th>
                <th>Harga</th>
            </tr>
        </thead>
        <tbody>
            @foreach (session('cart') as $item)
                <tr>
                    <td>{{ $item->name }}</td>
                    <td>Rp {{ number_format($item->price, 0, ',', '.') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('checkout.index') }}" class="btn btn-primary">Checkout</a>
@else
    <p>Keranjang kosong.</p>
@endif
@endsection
