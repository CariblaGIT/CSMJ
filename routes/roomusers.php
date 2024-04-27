<?php

use App\Http\Controllers\MessageController;
use Illuminate\Support\Facades\Route;


//RELATIONS

Route::get('/relations', [MessageController::class, 'getRoomUserRelations']);
Route::post('/relations', [MessageController::class, 'postRelation']);
Route::delete('/relations/{id}', [MessageController::class, 'deleteRelationById']);
