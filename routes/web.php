<?php

use App\Http\Controllers\GameController;
use App\Http\Controllers\LoginController;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignupController;

Route::get('/', function () {
    $user = Auth::user();
    return view('welcome', ['user' => $user]);
});

Route::get('/dashboard', [GameController::class, 'show']);

Route::get('/signup', function() {
    return view('signup');
});

Route::get('/games-created', function() {
    $user = Auth::user();
    return view('pages.games-created', ['user' => $user]);
})->name('games-created');

Route::get('/login', function() {
    return view('login');
});

Route::get('/about-us', function() {
    $user = Auth::user();
    return view('pages.about-us', ['user' => $user]);
});

Route::post('/signup', [SignupController::class, 'create'])->name('signup.submit');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout.submit');
Route::post('/games-created', [GameController::class, 'store'])->name('game.submit');