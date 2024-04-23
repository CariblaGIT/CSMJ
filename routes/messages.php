<?php

use App\Http\Controllers\MessageController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


//MESSAGES

Route::get('/messages', [MessageController::class, 'getAllMessages']);
Route::post('/messages', [MessageController::class, 'postMessage']);
// Route::put('/messages/{id}', [MessageController::class, 'putMessage']);  // maybe not needed?
Route::delete('/messages/{id}', [MessageController::class, 'deleteMessageById']);
