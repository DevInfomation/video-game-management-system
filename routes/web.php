<?php

use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignupController;

Route::get('/', function () {
    $user = Auth::user();
    return view('welcome', ['user' => $user]);
});

Route::get('/dashboard', function () {
    $user = Auth::user();
    return view('dashboard', ['user' => $user]);
});

Route::get('/signup', function() {
    return view('signup');
});

Route::get('/login', function() {
    return view('login');
});

Route::post('/signup', [SignupController::class, 'create'])->name('signup.submit');