<?php 

session_start();

if(isset($_SESSION['results'])) {
    $results = $_SESSION['results'];
    $matches = $results['matches'];
    $winnings = $results['winnings'];
    $error = $results['error'];
    $cost = $results['cost'];
  
    $_SESSION['results'] = null;
    
} else {
    $cost = 2;
    $matches = null;
    $winnings= 'None Yet!';
    $_SESSION['results'] = null;
}


require 'index-view.php';