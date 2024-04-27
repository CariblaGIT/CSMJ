<?php

use App\Http\Controllers\RoomuserController;
use Illuminate\Support\Facades\Route;


//RELATIONS

Route::get('/relations', [RoomuserController::class, 'getRoomUserRelations']);
Route::post('/relations', [RoomuserController::class, 'postRelation'])->middleware('auth:sanctum');
Route::delete('/relations/{id}', [RoomuserController::class, 'deleteRelationById']);