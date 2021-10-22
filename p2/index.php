<?php 

session_start();

if (isset($_SESSION['playersBalls'])) {
   var_dump("This is set!");
   $playerNum = $_SESSION['playersBalls'];
   


    $matches= $results['matches'];
    $winnings = $results['winnings'];

    $_SESSION['playersBalls'] = null;
    


} 




if(isset($_SESSION['results'])) {
    $results = $_SESSION['results'];

    $haveAnswer = $results['haveAnswer'];
    $correct = $results['correct'];
    
    $_SESSION['results'] = null;
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

$ball1 = rand(1,2);
$ball2 = rand($ball1+1, 4); //Min must be greater than the previous ball, Max must leave space for all the balls
$ball3 = rand($ball2+1, 5);
$ball4 = rand($ball3+1, 6);
$ball5 = rand($ball4+1, 7); 
$powerball = rand(1,26);



require 'index-view.php';