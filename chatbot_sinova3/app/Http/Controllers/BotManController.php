<?php

namespace App\Http\Controllers;

use BotMan\BotMan\BotMan;
use BotMan\BotMan\Messages\Conversations\Conversation;

class BotManController extends Controller
{
    public function handle()
    {
        $botman = app('botman');

        $botman->hears('Hi', [$this, 'respondHi']);
        $botman->hears('Halo', [$this, 'respondHalo']);
        $botman->hears('Halo, selamat siang, salam sejahtera', [$this, 'respondterima']);
        $botman->fallback([$this, 'respondFallback']);

        $botman->listen();
    }

    public function respondHi(BotMan $bot)
    {
        $bot->reply('Hi kakak, ada yang bisa si Nova bantu?');
    }

    public function respondHalo(BotMan $bot)
    {
        $bot->reply('Halo kakak, butuh bantuan si Nova?');
    }

    public function respondFallback(BotMan $bot)
    {
        $bot->reply('Ara-Ara, jangan membuat si Nova pusing dong.');
    }

    public function respondterima(BotMan $bot)
    {
        $bot->reply('ok bang');
    }
    
    public function startConversation(BotMan $bot)
    {
        $bot->reply('Halo kakak, selamat datang di web JTI Nova, saya Sinova siap menjawab pertanyaan kakak.');
    }
}
