<?php
require __DIR__.'/vendor/autoload.php';

use RPS\Game;
use App\Debug;

$game = new Game();

Debug::dump($game->play('scissors'));