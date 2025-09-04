<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

// Halaman utama
Route::get('/home', [PageController::class, 'home'])->name('home');

// Kursus
Route::get('/courses', [PageController::class, 'courses'])->name('courses.index');
Route::get('/courses/{slug}', [PageController::class, 'courseShow'])->name('courses.show');

// Artikel
Route::get('/articles', [PageController::class, 'articles'])->name('articles.index');
Route::get('/articles/{slug}', [PageController::class, 'articleShow'])->name('articles.show');

// Halaman lainnya
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

// Auth
Route::get('/login', [PageController::class, 'login'])->name('login');
Route::get('/register', [PageController::class, 'register'])->name('register');

Route::get('/', function () {
    return view('welcome');
});
