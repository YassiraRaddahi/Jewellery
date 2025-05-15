<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ProductsController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/categories/{name}', [CategoriesController::class, 'index'])->name('category.index');

// Route::get('/account', function () {
//     return view('pages.account');
// })->name('account');


// Route::get('/home', [HomeController::class, 'index'])->name('home');
// Route::get('/about', [AboutController::class, 'index'])->name('story');
// Route::get('/contact', [ContactController::class, 'index'])->name('contact');

// Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
// Route::get('/privacy', [PrivacyController::class, 'index'])->name('privacy');
// Route::get('/cart', [CartController::class, 'index'])->name('cart');
// Route::get('/search', [SearchController::class, 'index'])->name('search');


