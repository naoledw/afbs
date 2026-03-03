<?php

use App\Http\Controllers\LandingController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LandingController::class, 'home'])->name('home');
Route::get('/products', [LandingController::class, 'products'])->name('products');
Route::get('/consultancy', [LandingController::class, 'consultancy'])->name('consultancy');
Route::get('/research', [LandingController::class, 'research'])->name('research');
Route::get('/donate', [LandingController::class, 'donate'])->name('donate');
Route::get('/payments', [LandingController::class, 'payments'])->name('payments');
