<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\SearchController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/users/create', function () {
    return view('users.create');
})->name('users.create');

Route::get('/users/login', function () {
    return view('users.login');
})->name('login');  

Route::get('/users/accountpage', function () {
    return view('users.accountpage');
})->name('users.accountpage');

Route::get('/ourstory', function () {
    return view('pages.our_story');
})->name('ourstory');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

Route::get('/categories/{name}', [CategoriesController::class, 'show'])->name('categories.show');
Route::get('/products', [ProductsController::class, 'index'])->name('products.index');
Route::get('/products/sale', [ProductsController::class, 'sale'])->name('products.sale');
Route::get('/products/{id}', [ProductsController::class, 'show'])->name('products.show');
Route::get('/cart', [CartController::class, 'show'])->name('cart.show');
Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');
Route::post('/cart/update', [CartController::class, 'update'])->name('cart.update');
Route::post('/cart/delete-one', [CartController::class, 'deleteOne'])->name('cart.deleteOne');

Route::get('/privacy', function () {
    return view('pages.privacy');
})->name('privacy');

Route::get('/search', [SearchController::class, 'liveSearch'])->name('search');
Route::get('/search/{name}', [SearchController::class, 'show'])->name('search.name');
Route::get('/search/products', [SearchController::class, 'show'])->name('search.name.products');
Route::get('/search/categories/{name}', [SearchController::class, 'show'])->name('search.name.categories.name');
Route::get('/search', [SearchController::class, 'show'])->name('search.name.focus');

