<?php

use App\Http\Controllers\BotManController;

$botman = app('botman');

$botman->hears('Hi', [BotManController::class, 'respondHi']);
$botman->hears('Halo', [BotManController::class, 'respondHalo']);
$botman->hears('Halo, selamat siang, salam sejahtera', [BotManController::class, 'respondterima']);
$botman->fallback([BotManController::class, 'respondFallback']);
