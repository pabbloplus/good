<?php

use Illuminate\Support\Facades\Route;
use App\Models\Product;
use App\Http\Controllers\CartController;



Route::get('/', function () {
    $products = Product::all();
    return view('welcome',compact('products'));
});

Route::get('cart',[CartController::class,'cart'])->name('cart');
Route::get('add-cart/{productId}',[CartController::class,'addCart'])->name('add.cart');

//
Route::get('add-quantity/{productId}',[CartController::class,'addQuantity'])->name('add.quantity');

Route::get('decrease-quantity/{productId}',[CartController::class,'decreaseQuantity'])->name('decrease.quantity');

Route::get('remove-item/{productId}',[CartController::class,'removeItem'])->name('remove.item');

Route::get('clear',[CartController::class,'clearCart'])->name('clear');
