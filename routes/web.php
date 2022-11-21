<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index', [
        'page' => 'Home'
    ]);
});

Route::get('/shop', function () {
    return view('shop', [
        'page' => 'Shop',
        'breadcrumbDetail' => 'Collection Products'
    ]);
});

Route::get('/product', function () {
    return view('product-detail', [
        'page' => 'Product',
        'breadcrumbDetail' => 'Product Single'
    ]);
});

Route::get('/cart', function () {
    return view('cart', [
        'page' => 'Cart',
        'breadcrumbDetail' => 'My Cart'
    ]);
});

Route::get('/checkout', function () {
    return view('checkout', [
        'page' => 'Checkout',
        'breadcrumbDetail' => 'Checkout'
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        'page' => 'Contact',
        'breadcrumbDetail' => 'Contact Us'
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'page' => 'About',
        'breadcrumbDetail' => 'About Us'
    ]);
});
