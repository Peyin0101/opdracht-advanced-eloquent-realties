<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReviewController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/products');
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');
Route::get('/products/{product}/review', [ReviewController::class, 'create'])->name('reviews.create');
Route::post('/products/{product}/review', [ReviewController::class, 'store'])->name('reviews.store');
