<?php
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');  // Menggunakan HomeController untuk root


// Rute untuk halaman create
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');

// Route login untuk form login
Route::get('/login', function () {
    return view('login');
})->name('login');

// Route login untuk menangani form login (POST request)
Route::post('/login', [AuthController::class, 'login']);
