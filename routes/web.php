<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Dashboard Umum
Route::get('/dashboard', function () {
    $totalProducts = Product::count();
    $totalUsers = User::count();
    return view('dashboard', compact('totalProducts', 'totalUsers'));
})->middleware(['auth', 'verified'])->name('dashboard');

// CRUD Khusus ADMIN
Route::middleware(['auth', 'verified', \App\Http\Middleware\CheckRole::class.':admin'])->group(function () {
    Route::resource('products', ProductController::class);
    Route::get('/export-pdf', [ProductController::class, 'exportPdf'])->name('products.exportPdf');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';