<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;

Route::get('/', function () {
    return redirect()->route('products.index');
});

// Route untuk melihat daftar produk
Route::get('/products', [ProductController::class, 'index'])->name('products.index');

// Route untuk melihat detail produk
Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');

// Route untuk menambah ke keranjang
Route::post('/cart/add/{id}', [CartController::class, 'add'])->name('cart.add');

// Route untuk melihat keranjang belanja
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');

// Route untuk checkout
Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout.index');
Route::post('/checkout/process', [CheckoutController::class, 'process'])->name('checkout.process');
