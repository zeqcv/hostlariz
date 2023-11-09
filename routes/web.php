<?php

use App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ServerController;
use App\Http\Controllers\SupportController;
use Illuminate\Support\Facades\Route;

Route::get('/', [Controller::class, 'index'])->name('home');
Route::get('/sunucu/oyun', [Controller::class, 'gameServersAll'])->name('gameServers');
Route::get('/sunucu/oyun/{gameRentPath}', [Controller::class, 'gameServerRent'])->name('gameServerRent');
