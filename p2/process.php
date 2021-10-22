<?php
session_start();
// $player_ball1 = $_POST['ball1'];
// $player_ball2 = $_POST["ball2"];
// $player_ball3 = $_POST["ball3"];
// $player_ball4 = $_POST["ball4"];
// $player_ball5 = $_POST["ball5"];

// var_dump($_SESSION('Hello'));



// $_SESSION['playersBalls[]'] = $_POST['playersBalls[]'];

$playerNum = $_POST['playersBalls'];
//var_dump($_POST[$playerNum]);

if(!isset($_POST['playersBalls[]'])) {
    var_dump('Did not subscribe');
}

if(isset($_POST['playersBalls'])) {
    var_dump($playerNum);
}
if(count($playerNum) > 5) {
    echo "Please select only 5 numbers";
}
// $playerNum = $_POST['playersBalls[]'];


// $player_powerball = $_POST["powerball"];


// $haveAnswer = false;

// if ($answer == "") {
//     $haveAnswer = false;
// } elseif ($answer == "pumpkin") {
//      $correct = true; 
// } else {
//     $correct = false; 
// }

//  $_SESSION['results'] = [
//      'haveAnswer' => $haveAnswer,
//      'correct' => $correct
//  ];

header('Location: index.php');