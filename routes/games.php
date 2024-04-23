<?php

use App\Http\Controllers\GameController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


//GAMES

Route::get('/games', [GameController::class, 'getAllGames']);
Route::post('/games', [GameController::class, 'postGame']);
Route::put('/games/{id}', [GameController::class, 'putGame']);
Route::delete('/games/{id}', [GameController::class, 'deleteGame']);