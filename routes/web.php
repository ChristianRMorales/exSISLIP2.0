<?php

use App\Http\Controllers\Api\UserController;
use Illuminate\Support\Facades\Route;

// User registration
Route::get('/register', function () {
    return view('user.register');
})->name('register');

// User login
Route::get('/login', function () {
    return view('user.login');
})->name('login');

// User profile
Route::get('/profile/{userId}', function ($userId) {
    $user = App\Models\User::find($userId);
    return view('user.profile', compact('user'));
})->name('profile');

// API routes
Route::prefix('api')->group(function () {
    Route::post('/register', [UserController::class, 'register'])->name('api.register');
    Route::post('/login', [UserController::class, 'login'])->name('api.login');
    Route::put('/users/{userId}', [UserController::class, 'updateProfile'])->name('api.updateProfile');
});