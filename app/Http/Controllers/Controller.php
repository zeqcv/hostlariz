<?php

namespace App\Http\Controllers;

use App\Models\Games;
use App\Models\Packages;
use Illuminate\Support\Facades\Http;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index()
    {
        //Get Games on DB
        $games = Games::all();

        return view("pages.Home", compact("games"));
    }

    public function gameServers($gameRentPath)
    {
        $games = Games::all();

        $game = Games::where("gameRentPath", $gameRentPath)->first();
        return view("pages.gameServers", compact("game", "games"));
    }
    public function gameServersAll()
    {
        $games = Games::all();
        return view("pages.gameServers", compact("games"));
    }
    public function gameServerRent($gameRentPath)
    {

        $game = Games::where("gameRentPath", $gameRentPath)->first();

        $games = Games::all();
        $packages = Packages::where("gameType", $game->gameRentPath)->orderBy('id', 'asc')->get();

        return view("pages.gameServerRent", compact("game", "games", "packages"));
    }


}
