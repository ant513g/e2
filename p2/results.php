<?php
session_start();
// $answer = $_POST["answer"];

$answer = $_POST['playersBalls'];

$haveAnswer = true;


$player_ball1 = $answer[0];
$player_ball2 = $answer[1];
$player_ball3 = $answer[2];
$player_ball4 = $answer[3];
$player_ball5 = $answer[4];
$player_powerball = rand(1,26);


if(count($answer) > 5) {
    echo "Please select only 5 numbers!";
    var_dump($answer);
}else if(count($answer) < 5) {
    echo "Please select 5 numbers!";
    var_dump($answer);
}





//  Balls Number Drawn
$drawing = [$ball1, $ball2, $ball3, $ball4, $ball5];


//  Player Numbers
$playerNum = [$player_ball1, $player_ball2, $player_ball3, $player_ball4, $player_ball5];



// foreach($playerNum as $value) {
//     $player_ball = $value;
// }

//  Array of the player numbers that matched the drawn balls
$playerMatches = [];



$powerballMatch;

//Text to accompany output
$matches;


//  Checks to see if there a match for powerball
if ($powerball === $player_powerball) {
    $powerballMatch = "<span class='powerball-match'>" . $powerball . "</span>";
}else{
    //if not, powerballMatch is nothing
    $powerballMatch = null;
}

//  These are all separate statements to see if any of the players numbers match any balls number drawn 
//  If they do, they are pushed to the array
if (in_array($player_ball1, $drawing)) {
    $playerMatches[] = $player_ball1;
}if (in_array($player_ball2, $drawing)) {
    $playerMatches[] = $player_ball2;
}if (in_array($player_ball3, $drawing)) {
    $playerMatches[] = $player_ball3;
}if (in_array($player_ball4, $drawing)) {
    $playerMatches[] = $player_ball4;
}if (in_array($player_ball5, $drawing)) {
    $playerMatches[] = $player_ball5;
}


//  Not sure if we're allowed to use functions, 
//  but I couldn't figure out how to output this unless I used echo.
//  Numbers that were matched Output
function thisFunction($playerMatches) {
    $arrlength = count($playerMatches);
    for($x = 0; $x < $arrlength; $x++) {
        echo "<span class='ball-match'>" . $playerMatches[$x] . "</span>";
    }
  }


//  Figuring out Matches and Prize won
//  First filter to see if Powerball matches, then if numbers match
//  This will count the length of the array $playerMatches. 
//  The length of the array determines the number of matches.
if($powerball === $player_powerball) {
    if(count($playerMatches) == 0) {
        $matches = "No Match + Powerball";
        $winnings = "$" . $ninthPrize;
    }elseif(count($playerMatches) == 1) {
        $matches = "One Match + Powerball";
        $winnings = "$" . $eighthPrize;
    }elseif(count($playerMatches) == 2) {
        $matches = "Two Matches + Powerball";
        $winnings = "$" . $seventhPrize;
    }elseif(count($playerMatches) == 3) {
        $matches = "Three Matches + Powerball";
        $winnings = "$" . $fifthPrize;
    }elseif(count($playerMatches) == 4) {
        $matches = "Four Matches + Powerball";
        $winnings = "$" . $thirdPrize;
    }elseif(count($playerMatches) == 5) {
        $matches = "Five Matches + Powerball <br> <br> <span class='jackpot'> YOU HAVE WON THE JACKPOT!</span>";
        $winnings = "JACKPOT $" . $jackpot;
    }
}elseif(count($playerMatches) == 0) {
    $matches = "No Match";
    $winnings = "None";
}elseif(count($playerMatches) == 1) {
    $matches = "One Match";
    $winnings = "None";
}elseif(count($playerMatches) == 2) {
    $matches = "Two Matches";
    $winnings = "None";
}elseif(count($playerMatches) == 3) {
    $matches = "Three Matches";
    $winnings = "$" . $sixthPrize;
}elseif(count($playerMatches) == 4) {
    $matches = "Four Matches";
    $winnings = "$" . $fourthPrize;
}elseif(count($playerMatches) == 5) {
    $matches = "Five Matches";
    $winnings = "$" . $secondPrize;
}else{
    $matches = "No Match";
    $winnings = "None";
}









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