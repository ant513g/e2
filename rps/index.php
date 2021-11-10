<?php
// require __DIR__.'/vendor/autoload.php';
session_start();

use RPS\Game;

$game = new Game();

$moves = ['rock', 'paper', 'scissos'];

$lastGame = $_SESSION['results']['lastGame'] ?? null;
$recentGames = $_SESSION['result']['recentGames'] ?? null;

$_SESSION['results']['lastGame'] = null;


// use App\Debug;



// Debug::dump($game->play('scissors'));

require 'index-view.php';