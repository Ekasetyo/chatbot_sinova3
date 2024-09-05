<?php

use Illuminate\Support\Facades\Route;

Route::get('/wecome', function () {
    return view('welcome');
});


use App\Http\Controllers\BotManController;

Route::post('/botman', [BotManController::class, 'handle']);
Route::get('/', function () {
    return view('chat');
});
