<?php

use App\Http\Controllers\GameController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/games', [GameController::class, 'getAllGames']);

Route::post('/games', [GameController::class, 'postGame']);

Route::put('/games/{id}', [GameController::class, 'putGame']);