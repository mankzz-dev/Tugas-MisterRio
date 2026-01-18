<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SekolahController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return 'Selamat Datang di Praktek Laravel 12!';
});

Route::get('/user/{id}', function ($id) {
    return 'Profil Pengguna dengan ID: ' . $id;
});

Route::get('/kategori/{slug?}', function ($slug = 'umum') {
    return 'Menampilkan Artikel Kategori: ' . $slug;
});

Route::get('/dashboard/statistik/pengunjung', function () {
    return 'Halaman Statistik Pengunjung';
})->name('admin.statistik');

Route::redirect('/tentang-kami', '/about');
Route::get('/about', function () {
    return 'Ini adalah Halaman Tentang Kami yang baru';
});

// Route menggunakan Controller
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/{id}', [PostController::class, 'show'])->name('posts.show');
Route::get('/about-me', [PostController::class, 'about'])->name('posts.about');


// Rute untuk halaman sekolah
Route::get('/profil/{id}', [SekolahController::class, 'show']);