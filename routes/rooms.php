<?php

use App\Http\Controllers\RoomController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/rooms', [RoomController::class, 'getAllRooms']);

Route::post('/rooms', [RoomController::class, 'postRoom']);

Route::put('/rooms/{id}', [RoomController::class, 'putRoom']);

Route::delete('/rooms/{id}', [RoomController::class, 'deleteRoom']);