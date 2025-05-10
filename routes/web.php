<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignupController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/signup', function() {
    return view('signup');
});

Route::get('/login', function() {
    return view('login');
});

Route::post('/signup', [SignupController::class, 'create'])->name('signup.submit');