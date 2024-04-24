<?php

use App\Http\Controllers\MessageController;
use Illuminate\Support\Facades\Route;


//MESSAGES

Route::get('/messages', [MessageController::class, 'getAllMyMessages']);
Route::get('/messages/{room}', [MessageController::class, 'getAllRoomMessages']);
Route::post('/messages', [MessageController::class, 'postMessage']);
Route::put('/messages/{id}', [MessageController::class, 'updateMessageById']);
Route::delete('/messages/{id}', [MessageController::class, 'deleteMessageById']);
