<?php
use App\Http\Controllers\AuthController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\formrhaController;

Route::get('/', [HomeController::class, 'index'])->name('home');  // Menggunakan HomeController untuk root


// Rute untuk halaman create
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');

// Route login untuk form login
Route::get('/login', function () {
    return view('sections.login');
})->name('login');

// Route login untuk menangani form login (POST request)
Route::post('/login', [AuthController::class, 'login']);

Route::get('/materi/persiapan-pra-banjir', [MateriController::class, 'praBanjir'])->name('materi.potensi');
Route::get('/materi/saat-banjir', [MateriController::class, 'SaatBanjir'])->name('materi.respon');
Route::get('/materi/pasca-banjir', [MateriController::class, 'PascaBanjir'])->name('materi.bencana');
Route::get('/materi/siap-siaga',[MateriController::class,'SiapSiaga'])->name('materi.siaga');
Route::get('/materi/potensi-bencana',[MateriController::class,'PotensiBencana'])->name('materi.potensibencana');
Route::get('/materi/respon-bencana',[MateriController::class,'ResponBencana'])->name('materi.responbencana');

Route::get('/materi', function () {
    return view('sections.materi');
})->name('materi');

Route::get('/formRHA/Form-RHA', [formrhaController::class, 'Form_RHA'])->name('formRHA.formrha');