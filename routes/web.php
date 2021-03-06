<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BoardController;

/* Board */
Route::get('/login-form', [BoardController::class, 'loginForm']);
Route::post('/login-user', [BoardController::class, 'loginUser']);
Route::get('/list', [BoardController::class, 'listView']);

Route::get('/add-form', [BoardController::class, 'addForm']);
Route::post('/add', [BoardController::class, 'add']);
