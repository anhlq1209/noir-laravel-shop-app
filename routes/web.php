<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckOutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductDetailController;
use App\Http\Controllers\ShopController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/about', [AboutController::class, 'index'])->name('about');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');

Route::get('/shop', [ShopController::class, 'index'])->name('shop');

Route::get('/shop/{category}', [ShopController::class, 'category'])->name('shop');

Route::get('/product/{id}', [ProductDetailController::class, 'index'])->name('product_detail');

Route::get('/cart', [CartController::class, 'index'])->name('cart');

Route::get('/checkout', [CheckOutController::class, 'index'])->name('checkout');