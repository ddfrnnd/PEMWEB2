@extends('layouts.app')

@section('content')
<h1>Checkout</h1>

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

    <form action="{{ route('checkout.process') }}" method="POST">
        @csrf
        <button type="submit" class="btn btn-success">Bayar Sekarang</button>
    </form>
@else
    <p>Tidak ada item di keranjang.</p>
@endif
@endsection
