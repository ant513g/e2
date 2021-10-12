<?php

$answer = $_POST["answer"];

$haveAnswer = true;

if ($answer == "") {
    $haveAnswer = false;
} elseif ($answer == "pumpkin") {
     $correct = true; 
    } else {
        $correct = false; 
    }

Require "process-view.php";