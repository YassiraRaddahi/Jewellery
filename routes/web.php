<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CartController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;

Route::get('/session-debug', function () {
     // Store some session data
    // session(['user_id' => 42, 'name' => 'Alice']);
    // session()->save(); // force save

    $sessionId = session()->getId();

    $filePath = storage_path("framework/sessions/{$sessionId}");

    return [
        'session_id'      => $sessionId,
        'session_file'    => $filePath,
        'exists'          => file_exists($filePath),
        'file_contents'   => file_exists($filePath) ? file_get_contents($filePath) : 'not found',
        'session_data'    => session()->all(),
    ];
});

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


// Route::get('/set-session', function () {
//     session(['favourite_colour' => 'green']);
//     return 'Session value set!';
// });

// Route::get('/get-session', function () {
//     return 'Your favourite colour is: ' . session('favourite_colour', 'not set');;
// });

// Route::get('/clear-session', function () {
//     session()->flush();
//     return 'Session cleared!';
// });

// Route::get('/session-test', function () {
//     return session()->all();
// });

// Route::get('/show-session-id', function () {
//     return request()->cookie('laravel_session');
// });