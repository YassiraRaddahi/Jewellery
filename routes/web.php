<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ProductsController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

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

Route::get('/privacy', function () {
    return view('pages.privacy');
})->name('privacy');

Route::get('/user', function () {
    return view('users.show');
})->name('user');

