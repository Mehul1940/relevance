<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\AuthController;

// Page Routes
Route::controller(PagesController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/about', 'about')->name('about');
    Route::get('/services', 'services')->name('services');
    Route::get('/contact', 'contact')->name('contact');
    Route::post('/contact', 'storeContact')->name('contact.store');
});

// Authentication Routes (Public)
Route::controller(AuthController::class)->group(function () {
    Route::middleware('guest')->group(function () {
        Route::get('/login', 'showLogin')->name('login');
        Route::post('/login', 'login')->name('login.post');
        Route::get('/register', 'showRegister')->name('register');
        Route::post('/register', 'register')->name('register.post');
        Route::get('/forgot-password', 'showForgotPassword')->name('password.request');
        Route::post('/forgot-password', 'sendResetLink')->name('password.email');
    });

    Route::post('/logout', 'logout')->name('logout')->middleware('auth');
});

// Protected Routes 
Route::middleware('auth')->group(function () {
    Route::controller(AuthController::class)->group(function () {
        Route::get('/profile', 'profile')->name('profile');
        Route::put('/profile', 'updateProfile')->name('profile.update');
        Route::get('/change-password', 'showChangePassword')->name('password.change');
        Route::post('/change-password', 'changePassword')->name('password.update');
    });
});