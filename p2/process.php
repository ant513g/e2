<?php
session_start();
$player_ball1 = $_POST["ball1"];
$player_ball2 = $_POST["ball2"];
$player_ball3 = $_POST["ball3"];
$player_ball4 = $_POST["ball4"];
$player_ball5 = $_POST["ball5"];
$player_powerball = $_POST["powerball"];

$haveAnswer = true;

if ($answer == "") {
    $haveAnswer = false;
} elseif ($answer == "pumpkin") {
     $correct = true; 
} else {
    $correct = false; 
}

 $_SESSION['results'] = [
     'haveAnswer' => $haveAnswer,
     'correct' => $correct
 ];


header('Location: index.php');