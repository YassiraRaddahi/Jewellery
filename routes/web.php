<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CartController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/ourstory', function () {
    return view('pages.our_story');
})->name('ourstory');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

Route::get('/login', function () {
    return view('pages.log_in');
})->name('login');  

Route::get('/categories/{name}', [CategoriesController::class, 'show'])->name('categories.show');
Route::get('/products', [ProductsController::class, 'index'])->name('products.index');
Route::get('/products/sale', [ProductsController::class, 'sale'])->name('products.sale');
Route::get('/products/{id}', [ProductsController::class, 'show'])->name('products.show');
Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');

Route::get('/privacy', function () {
    return view('pages.privacy');
})->name('privacy');