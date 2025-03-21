<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;

Route::get('/', function(){
    return view('web.homepage');
   });   
   Route::get('product', function(){
    return view("web.product");
   });
   Route::get('product/{slug}', function($slug){
    return "halaman single product - ".$slug;
   });
   Route::get('categories', function(){
    return view("web.categories");
   });
   Route::get('category/{slug}', function($slug){
    return "halaman single category - ".$slug;
   });
   Route::get('cart', function(){
    return "halaman cart";
   });
   Route::get('checkout', function(){
    return "halaman checkout";
   });
   
// Route::get('/', function () {
//     return redirect()->route('products.index');
// });

// // Route untuk melihat daftar produk
// Route::get('/products', [ProductController::class, 'index'])->name('products.index');

// // Route untuk melihat detail produk
// Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');

// // Route untuk menambah ke keranjang
// Route::post('/cart/add/{id}', [CartController::class, 'add'])->name('cart.add');

// // Route untuk melihat keranjang belanja
// Route::get('/cart', [CartController::class, 'index'])->name('cart.index');

// // Route untuk checkout
// Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout.index');
// Route::post('/checkout/process', [CheckoutController::class, 'process'])->name('checkout.process');
