<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::view('/', 'Frontend.home')->name('home');
Route::view('/about', 'Frontend.about')->name('about');
Route::view('/products', 'Frontend.products')->name('products');
Route::view('/blogs', 'Frontend.blogs')->name('blogs');
Route::view('/blog-details', 'Frontend.blog-details')->name('blog-details');
Route::view('/contact', 'Frontend.contact')->name('contact');

Route::view('/terms-and-condtion', 'Frontend.terms-and-condtion')->name('terms-and-condtion');
Route::view('/privacy-policy', 'Frontend.privacy-policy')->name('privacy-policy');

Route::fallback(function () {
    return response()->view('Error.404', [], 404);
});

require __DIR__.'/auth.php';
require __DIR__.'/backend.php';
require __DIR__.'/frontend.php';
