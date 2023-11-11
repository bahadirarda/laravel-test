<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TagController;



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

// routes/web.php
// Route::middleware(['admin'])->group(function () {
//     Route::get('admin', function () {
//         // Admin paneline ait içerikler burada yer alacak
//         return redirect()->route('filament.pages.dashboard');
//     });
// });




// Ana sayfa için Route
Route::get('/', [HomeController::class, 'index'])->name('home');
// Ürün detay için Route
Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');
Route::resource('products', ProductController::class);
// Category ve Tag sayfası için Route
Route::resource('categories', CategoryController::class);
Route::resource('tags', TagController::class);
// Genel route
Auth::routes();
// Ana Sayfa kontrol Route
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
