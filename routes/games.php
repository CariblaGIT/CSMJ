<?php

use App\Http\Controllers\GameController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::group([
    'middleware' => ['auth:sanctum','super_admin']
], function () {
    Route::post('/games', [GameController::class, 'postGame']);
    Route::put('/games/{id}', [GameController::class, 'putGame']);
    Route::delete('/games/{id}', [GameController::class, 'deleteGame']);
});

Route::get('/games', [GameController::class, 'getAllGames'])->middleware('auth:sanctum');