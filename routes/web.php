<?php

use App\Http\Controllers\ProductController;
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
    return view('home');
});

Route::get('about-us', function () {
    return view('about-us');
});

Route::get('blog-details', function () {
    return view('blog-details');
});

Route::get('blog', function () {
    return view('blog');
});

Route::get('cart', function () {
    return view('cart');
});

Route::get('checkout', function () {
    return view('checkout');
});

Route::get('coming-soon', function () {
    return view('coming-soon');
});

Route::get('contact', function () {
    return view('contact');
});

Route::get('home2', function () {
    return view('home2');
});

Route::get('login-register', function () {
    return view('login-register');
});

Route::get('my-account', function () {
    return view('my-account');
});

Route::get('product-details', function () {
    return view('product-details');
});

Route::get('shop-collection', function () {
    return view('shop-collection');
});

Route::get('shop-fullwidth', function () {
    return view('shop-fullwidth');
});

Route::get('shop-instagram', function () {
    return view('shop-instagram');
});

Route::get('shop', function () {
    return view('shop');
});

Route::get('wishlist', function () {
    return view('wishlist');
});

Route::resource('products', ProductController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
