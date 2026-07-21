<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route Dashboard (Bisa diakses Admin & User)
Route::get('/dashboard', function () {
    $totalProducts = \App\Models\Product::count();
    $totalUsers = \App\Models\User::count();
    return view('dashboard', compact('totalProducts', 'totalUsers'));
})->middleware(['auth', 'verified'])->name('dashboard');

// Route yang bisa diakses SEMUA User yang sudah login (Admin & User)
Route::middleware(['auth', 'verified'])->group(function () {
    // Menu Profil User bawaan Breeze
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Lihat Daftar Barang
    Route::get('/products', [ProductController::class, 'index'])->name('products.index');
});

// Route Khusus ADMIN (Tambah, Edit, Hapus, Export PDF)
Route::middleware(['auth', 'verified', 'role:admin'])->group(function () {
    Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
    Route::post('/products', [ProductController::class, 'store'])->name('products.store');
    Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
    Route::put('/products/{product}', [ProductController::class, 'update'])->name('products.update');
    Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');
    Route::get('/export-pdf', [ProductController::class, 'exportPdf'])->name('products.exportPdf');
});

require __DIR__.'/auth.php';