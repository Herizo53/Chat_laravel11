<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ToutUser;

Route::get('/', function () {
    return view('auth.login');
});

// Routes accessibles aux invités (non authentifiés)
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('storeLogin');

    Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
    Route::post('/register', [AuthController::class, 'register'])->name('storeRegister');
});

// Routes protégées (accessibles uniquement aux utilisateurs connectés)
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/amis', [AuthController::class, 'amis']);
    Route::get('/message/{id}', [AuthController::class, 'message'])->name('message');
    Route::get('/download/{id}', [AuthController::class, 'download'])->name('download');
    Route::get('/msg/{id}', [AuthController::class, 'voirmessage'])->name('voirmsg');
    Route::post('/sendmessage', [AuthController::class, 'sendmessage'])->name('send');
    Route::post('/pub', [AuthController::class, 'publier'])->name('publications');
});


// Ajax

use App\Http\Controllers\UploadController;

Route::get('/file', [UploadController::class, 'file'])->name('file');
Route::post('/upload', [UploadController::class, 'store'])->name('upload.store');
