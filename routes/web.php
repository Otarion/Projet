<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');

//Chemin vers l'index
Route::get('/', [PostController::class, 'index'])->name('index');
//Chemin vers l'actualité
Route::get('/actualités', [PostController::class, 'news'])->name('news');
// Chemin des catégories (news)
Route::get('/categories/{category}', [PostController::class,'postsByCategory'])->name('posts.byCategory');

//Chemin vers les posts (news)
Route::get('/{post}', [PostController::class, 'show'])->name('posts.show');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
