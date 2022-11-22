<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckOutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\DB;
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

Route::get('/shop', [ShopController::class, 'index'])->name('shop');
Route::get('/shop/{category}', [ShopController::class, 'category'])->name('shop');

Route::get('/product', function () {
    return view('product-detail', [
        'page' => 'Product',
        'breadcrumbDetail' => 'Product Single'
    ]);
});

Route::get('/cart', [CartController::class, 'index'])->name('cart');

Route::get('/checkout', [CheckOutController::class, 'index'])->name('checkout');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');

Route::get('/about', [AboutController::class, 'index'])->name('about');
