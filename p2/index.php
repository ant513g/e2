<?php 

session_start();

if(isset($_SESSION['results'])) {
    $results = $_SESSION['results'];
    $matches = $results['matches'];
    $winnings= $results['winnings'];
    $haveAnswer = $results['haveAnswer'];
    $correct = $results['correct'];
    
    $_SESSION['results'] = null;
}

require 'index-view.php';