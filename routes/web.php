<?php
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

// Route login untuk form login
Route::get('/login', function () {
    return view('login');
})->name('login');

// Route login untuk menangani form login (POST request)
Route::post('/login', [AuthController::class, 'login']);
