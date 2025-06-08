<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\UsersController;

use App\Models\Product;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;

// Pages (these need to be moved to (a) dedicated controller(s))

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/ourstory', function () {
    return view('pages.our_story');
})->name('ourstory');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

Route::get('/privacy', function () {
    return view('pages.privacy');
})->name('privacy');

// Categories
Route::get('/categories/{name}', [CategoriesController::class, 'show'])->name('categories.show');

// Products
Route::get('/products', [ProductsController::class, 'index'])->name('products.index');
Route::get('/products/sale', [ProductsController::class, 'sale'])->name('products.sale');
Route::get('/products/{id}', [ProductsController::class, 'show'])->name('products.show');

// Cart
Route::get('/cart', [CartController::class, 'show'])->name('cart.show');
Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');
Route::put('/cart/update', [CartController::class, 'update'])->name('cart.update');
Route::delete('/cart/delete-one', [CartController::class, 'deleteOne'])->name('cart.deleteOne');

// Authentication
Route::get('/login', [AuthController::class, 'loginForm'])->name('loginForm');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'registerForm'])->name('registerForm');
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


// Users
Route::get('/users/accountpage', [UsersController::class, 'accountPage'])->middleware('auth')->name('users.accountpage');


// Search
Route::get('/search', [SearchController::class, 'liveSearch'])->name('search');
Route::get('/search/{name}', [SearchController::class, 'show'])->name('search.name');
Route::get('/search/products', [SearchController::class, 'show'])->name('search.name.products');
Route::get('/search/categories/{name}', [SearchController::class, 'show'])->name('search.name.categories.name');

