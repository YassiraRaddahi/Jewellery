<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layout.master_layout');
});
 Route::get('/login', function () {
    return view('pages.log-in.blade.php');
})->name('login');

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


