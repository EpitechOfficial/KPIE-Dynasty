<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ProfileController;

// Guest routes (accessible without authentication)
Route::middleware('guest')->group(function() {
    // Route for sign-in (login) page
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login'])->name('login.post');
    
    // Route for sign-up (register) page
    Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register.show');
    Route::post('/register', [RegisterController::class, 'register'])->name('register.post');
});

// Authenticated routes (require login)
Route::middleware('auth')->group(function() {
    // Route for user profile (view and update)
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
    Route::post('/profile', [ProfileController::class, 'update'])->name('profile.update');
    
    // Route to log out
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout.post');
});

// Public route
Route::get('/', function () {
    return view('welcome');
});
