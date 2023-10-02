<?php

use App\Http\Controllers\Api\UserController;
use Illuminate\Support\Facades\Route;

// User registration
Route::get('/register', function () {
    return view('user.register');
})->name('register');

// User login
Route::get('/', function () {
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


//


// Route::get('/', function () {
//     return view('auth.login');
// });

Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/counselor', function () {
    return view('counselor.counselor');
});
Route::get('/counselor_view', function () {
    return view('counselor.counselor_view');
});

Route::get('/create', function () {
    return view('create');
});


Route::get('/dean', function () {
    return view('dean.dean');
});

// routes/web.php
Route::get('/student', function () {
    return view('student.student');
});

Route::get('/teacher-view', function () {
    return view('teacher.teacher_view');
});
