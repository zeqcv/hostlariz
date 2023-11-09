<?php

namespace App\Providers;

use App\Models\Games;
use Illuminate\Support\ServiceProvider;

class CustomServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $games = Games::all();
        view()->share('games', $games);
    }
}
