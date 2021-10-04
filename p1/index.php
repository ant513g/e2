<?php 
/*

http://e2p1.anadesign.me/

Lottery? Powerball!
- Jackpot is x million dollars.
- Odds
- Cost of one ticket is $2 for player
    - How many tickets do you want?
- Player spent $x, won $x.
- Select five numbers from 1 to 69 for the white balls; then select one number from 1 to 26 for the red
        Powerball. Choose your numbers on a play slip or let the lottery terminal randomly pick your numbers. The
        Powerball jackpot grows until it is won.
- Randomly generate 5 numbers from 1 to 69, 1 for PowerBall from 1 to 26.
    - Each number must be greater than the previous number.
    - If the player's number is === to the 5 numbers, and === to powerball = Jackpot!
    - 5 matching numbers, Prize = $1,000,000 (Powerplay $2mill)
    - 4 matching number + powerball = $50,0000( x powerplays)
    - 4 matching - $100 (x powerplays)
    - 3 matching number + powerball = $100 (x powerplay)
    - 3 matching numbers = $7 (x powerplay)
    - 2 matching numbers + powerball = $7 (x powerplay)
    - 1 matching number + powerball = $4 (x powerplay)
    - 0 matching number + powerball = $4 (x powerplay)
- Add Multiplier randomly add a power play, 2x, 3x, 4x, 5x, 10x, cost of each is multiplier is $1?
- If player adds Multipler — When jackpots are below $150 Million, a 10X value is added
- 10x - Prize Won Timers 10 (odds 1 in 43)
- https://edit.nylottery.ny.gov/sites/default/files/2020-03/Powerball_Odds_and_Prizes_0.pdf


*/




// $ball1 = rand(1,65);
// $ball2 = rand($ball1+1, 66); //Min must be greater than the previous ball, Max must leave space for all the balls
// $ball3 = rand($ball2+1, 67);
// $ball4 = rand($ball3+1, 68);
// $ball5 = rand($ball4+1, 69); 
// $powerball = rand(1,26);

// $player_ball1 = rand(1,65);
// $player_ball2  = rand($player_ball1+1, 66); //Min must be greater than the previous ball, Max must leave space for all the balls
// $player_ball3  = rand($player_ball2+1, 67);
// $player_ball4  = rand($player_ball3+1, 68);
// $player_ball5  = rand($player_ball4+1, 69); 
// $player_powerball = rand(1,26);


$cost = 2;

//Prizes
$total = 685000000;

//Match 5 + PB
$jackpot= $total * .68;

//Match 5
$secondPrize = 1000000;

//Match 4 + PB
$thirdPrize = 500000;

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


$ball1 = rand(1,2);
$ball2 = rand($ball1+1, 4); //Min must be greater than the previous ball, Max must leave space for all the balls
$ball3 = rand($ball2+1, 5);
$ball4 = rand($ball3+1, 6);
$ball5 = rand($ball4+1, 7); 
$powerball = rand(1,2);

$player_ball1 = rand(1,2);
$player_ball2  = rand($player_ball1+1, 4); //Min must be greater than the previous ball, Max must leave space for all the balls
$player_ball3  = rand($player_ball2+1, 5);
$player_ball4  = rand($player_ball3+1, 6);
$player_ball5  = rand($player_ball4+1, 7); 
$player_powerball = rand(1,2);

// Originally I was going to do conditionals ($ball1 == $player_ball1) || ($ball1 == $player_ball2), etc. 
// But it ended up being too long because each ball drawn had to be compared to all of the player's balls. 
// Instead I opted to create an array of the matches, then search to see if the the matches

$drawing = [$ball1, $ball2, $ball3, $ball4, $ball5];
$playerNum = [$player_ball1, $player_ball2, $player_ball3, $player_ball4, $player_ball5];
$playerMatches = [];
$powerballMatch;
$matches;

if ($powerball === $player_powerball) {
    $powerballMatch = "<span class='powerball-match'> + " . $powerball . "</span>";
}else{
    $powerballMatch = null;
}
if (in_array($player_ball1, $drawing)) {
    $playerMatches[] = $ball1;
}if (in_array($player_ball2, $drawing)) {
    $playerMatches[] = $ball2;
}if (in_array($player_ball3, $drawing)) {
    $playerMatches[] = $ball3;
}if (in_array($player_ball4, $drawing)) {
    $playerMatches[] = $ball4;
}if (in_array($player_ball5, $drawing)) {
    $playerMatches[] = $ball5;
}


// $myMatches;
function thisFunction($playerMatches) {
    $arrlength = count($playerMatches);
    for($x = 0; $x < $arrlength; $x++) {
        echo "<span class='ball-match'>" . $playerMatches[$x] . "</span>";
    }
  }


//First filter through the Powerball
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
        $matches = "Five Matches + Powerball";
        $winnings = "$" . $jackpot;
    }
//This will count the length of the array. The lenght of the array determines the number of matches.
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

?>