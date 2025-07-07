<?php

namespace App\Http\View\Composers;

use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;
use App\Models\Game;

class GlobalComposer
{
    public function compose(View $view)
    {
        $view->with('user', Auth::user());
        $view->with('issuedGames', Game::all());
    }
}
