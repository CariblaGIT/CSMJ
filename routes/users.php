<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


//USERS

Route::get('/users', [UserController::class, 'getAllUsers'])->middleware('auth:sanctum')->middleware('super_admin');

Route::get('/users/profile/', [UserController::class, 'getUserProfile'])->middleware('auth:sanctum');

Route::put('/users/{id}', function($id){
    return 'update USER' .$id;
});

Route::delete('/users/{id}', function($id){
    return 'delete USER' .$id;
});