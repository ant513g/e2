<?php 

session_start();

if(isset($_SESSION['results'])) {
    $results = $_SESSION['results'];
    $matches = $results['matches'];
    $winnings= $results['winnings'];
    $winnings = $winnings;
    $_SESSION['results'] = null;
    $cost = $results['cost'];
    var_dump("Results is set!" . $cost);
} else {
    $cost = 2;
    $matches = null;
    $winnings= 'None Yet!';
    $_SESSION['results'] = null;
    var_dump('Results is NOT set!' . $cost);
}


require 'index-view.php';