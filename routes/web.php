<?php

use App\Models\Game;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignupController;
use Illuminate\Session\Middleware\AuthenticateSession;

Route::get('/', function () {
    $user = Auth::user();
    return view('welcome', ['user' => $user]);
});

Route::middleware(['auth', 'auth.session'])->group(function() {
    Route::get('/dashboard', [GameController::class, 'show']);
    
    Route::get('/signup', function() {
        return view('signup');
    });
    
    Route::get('/games-created', function() {
        return view('pages.games-created');
    })->name('games-created');
    
    Route::get('/games/{id}', [GameController::class, 'showSingleGame'])->name('showGames');
    
    Route::get('/login', function() {
        return view('login');
    });
    Route::get('/about-us', [GameController::class, 'showAboutUs']);
    Route::get('/games', [GameController::class, 'showGamesCategory']);
    
    Route::post('/signup', [SignupController::class, 'create'])->name('signup.submit');
    Route::post('/login', [LoginController::class, 'login'])->name('login.submit');
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout.submit');
    Route::post('/games-created', [GameController::class, 'store'])->name('game.submit');
    
});

