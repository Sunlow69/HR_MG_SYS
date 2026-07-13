<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// ========== PUBLIC ROUTES ==========

// Homepage - Public Careers Dashboard
Route::get('/', function () {
    return view('public.careers');
})->name('careers');

// Auth pages
Route::get('/auth/signin', [AuthController::class, 'showSignin'])->name('auth.signin');
Route::post('/auth/signin', [AuthController::class, 'signin']);

Route::get('/auth/signup', [AuthController::class, 'showSignup'])->name('auth.signup');
Route::post('/auth/signup', [AuthController::class, 'signup']);

Route::post('/auth/logout', [AuthController::class, 'logout'])->name('auth.logout');

// Apply page
Route::get('/apply', function () {
    return view('apply');
})->name('apply');

// ========== HR ADMIN SYSTEM ROUTES ==========

// Dashboard (admin) - Keep only the dashboard route since views still exist
Route::get('/admin/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

