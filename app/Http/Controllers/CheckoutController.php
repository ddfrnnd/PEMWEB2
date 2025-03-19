<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CheckoutController extends Controller
{
    public function index()
    {
        $cart = Session::get('cart', []);
        return view('checkout.index', compact('cart'));
    }

    public function process(Request $request)
    {
        Session::forget('cart');
        return redirect()->route('products.index')->with('success', 'Pembelian berhasil');
    }
}
