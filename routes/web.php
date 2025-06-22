<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/api/rooms', [RoomController::class, 'index']);
Route::post('/api/book', [RoomController::class, 'book']);
Route::post('/api/reset', [RoomController::class, 'reset']);
