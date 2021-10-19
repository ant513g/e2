<?php
session_start();
$answer = $_POST["answer"];
$word = $_SESSION['word'];
$haveAnswer = true;



if ($answer == "") {
    $haveAnswer = false;
} elseif ($answer == $word) {
     $correct = true; 
} else {
    $correct = false; 
}

 $_SESSION['results'] = [
     'haveAnswer' => $haveAnswer,
     'correct' => $correct
 ];


header('Location: index.php');