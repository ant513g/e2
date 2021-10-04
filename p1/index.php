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

$numbers = [
    1,2,3,4,5,6,7,8,9,10,
    11,12,13,14,15,16,17,18,19,20,
    21,22,23,24,25,26,27,28,29,30,
    31,32,33,34,35,36,37,38,39,40,
    41,42,43,44,45,46,47,48,49,50,
    51,52,53,54,55,56,57,58,59,60,
    61,62,63,64,65,66,67,68,69
];

$ball1 = rand(1,2);
$ball2 = rand($ball1+1, 7); //Min must be greater than the previous ball, Max must leave space for all the balls
$ball3 = rand($ball2+1, 8);
$ball4 = rand($ball3+1, 9);
$ball5 = rand($ball4+1, 10); 
$powerball = rand(1,10);


// $ball1 = rand(1,65);
// $ball2 = rand($ball1+1, 66); //Min must be greater than the previous ball, Max must leave space for all the balls
// $ball3 = rand($ball2+1, 67);
// $ball4 = rand($ball3+1, 68);
// $ball5 = rand($ball4+1, 69); 
// $powerball = rand(1,26);

$player_ball1 = rand(1,2);
$player_ball2  = rand($player_ball1+1, 7); //Min must be greater than the previous ball, Max must leave space for all the balls
$player_ball3  = rand($player_ball2+1, 8);
$player_ball4  = rand($player_ball3+1, 9);
$player_ball5  = rand($player_ball4+1, 10); 
$player_powerball = rand(1,10);

// $player_ball1 = rand(1,65);
// $player_ball2  = rand($player_ball1+1, 66); //Min must be greater than the previous ball, Max must leave space for all the balls
// $player_ball3  = rand($player_ball2+1, 67);
// $player_ball4  = rand($player_ball3+1, 68);
// $player_ball5  = rand($player_ball4+1, 69); 
// $player_powerball = rand(1,26);





$match;
$match1;
$match2;
$match3;
$match4;
$array = array();

if(($ball1 == $player_ball1) || ($ball1 == $player_ball2) ||($ball1 == $player_ball3) ||($ball1 == $player_ball4) ||($ball1 == $player_ball5)) {
    $match = "You have a match" + $ball1;
    array_push($array, $ball1);
}else{
   $match = "No Match";
};

if(($ball2 == $player_ball1) || ($ball2 == $player_ball2) ||($ball2 == $player_ball3) ||($ball2 == $player_ball4) ||($ball2 == $player_ball5)) {
    $match1 = $ball2;
    array_push($array, $ball2);
}else{
 $match1 = "No Match";
};

if(($ball3 == $player_ball1) || ($ball3  == $player_ball2) ||($ball3  == $player_ball3) ||($ball3  == $player_ball4) ||($ball3  == $player_ball5)) {
    $match2 = $ball3;
    array_push($array, $ball3);
}else{
  $match2 = "No Match";
};

if(($ball4 == $player_ball1) || ($ball4 == $player_ball2) ||($ball4 == $player_ball3) ||($ball4 == $player_ball4) ||($ball4 == $player_ball5)) {
    $match3 = $ball4;
    array_push($array, $ball4);
}else{
    $match3 = "No Match";
};

if(($ball5 == $player_ball1) || ($ball5 == $player_ball2) ||($ball5  == $player_ball3) ||($ball5  == $player_ball4) ||($ball5  == $player_ball5)) {
    $match4 = $ball5;
    array_push($array, $ball5);
}else{
     $match4 = "No Match";
};







require 'index-view.php';

?>