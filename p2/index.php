<?php 




// session_start();
// if(isset($_SESSION['results'])) {
//     $results = $_SESSION['results'];

//     // $haveAnswer = $results['haveAnswer'];
//     // $correct = $results['correct'];
    
//     $_SESSION['results'] = null;

// }


session_start();
if(isset($_SESSION['playersBalls'])) {
    $results = $_SESSION['playersBalls'];
    $_SESSION['playersBalls'] = null;

}

$cost = 2;

//Prizes
//I'm not sure how to include a ","
$total = "450 million";

//Match 5 + PB
$jackpot= "306 million";

//Match 5
$secondPrize = "1 million";

//Match 4 + PB
$thirdPrize = "50,000";

//Match 4
$fourthPrize = 100;

//Match 3 + PB
$fifthPrize = 100;

//Match 3
$sixthPrize = 7;

//Match 2 + PB
$seventhPrize = 7;

//Match 1 + PB
$eighthPrize = 4;

//Match 0 + PB
$ninthPrize = 4;

//Drawn Balls
$ball1 = rand(1,65);
$ball2 = rand($ball1+1, 66); //Min must be greater than the previous ball, Max must leave space for all the balls
$ball3 = rand($ball2+1, 67);
$ball4 = rand($ball3+1, 68);
$ball5 = rand($ball4+1, 69); 
$powerball = rand(1,26);

//Quickpick Numbers Player Numbers
$player_ball1 = rand(1,65);
$player_ball2  = rand($player_ball1+1, 66); //Min must be greater than the previous ball, Max must leave space for all the balls
$player_ball3  = rand($player_ball2+1, 67);
$player_ball4  = rand($player_ball3+1, 68);
$player_ball5  = rand($player_ball4+1, 69); 
$player_powerball = rand(1,26);



//  Balls Number Drawn
$drawing = [$ball1, $ball2, $ball3, $ball4, $ball5];

//  Player Numbers
// $playerNum = [$player_ball1, $player_ball2, $player_ball3, $player_ball4, $player_ball5];

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
require 'index-view.php';