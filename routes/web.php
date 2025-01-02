<?php

use Illuminate\Support\Facades\Route;



Route::view('/login', 'login');
Route::view('/', 'home');
Route::view('/products', 'products');
Route::view('/cart', 'cart');
Route::view('/sales', 'sales');
Route::view('/checkout', 'checkout');
Route::view('/success', 'success');
