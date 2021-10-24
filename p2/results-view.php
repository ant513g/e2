<!DOCTYPE html>
<html lang='en'>

<head>
    <title>Project 2 - PowerBall Results</title>
    <meta charset='utf-8'>
    <link href=data:, rel=icon>
    <link rel='stylesheet' href='style.css'>
</head>

<body>
    <h1>Project 2 - PowerBall</h1>
    <?php if($errorMessage = false) {
        if(isset($results)) { ?>
    <h1>Results</h1>
    <?php if ($haveAnswer == false) { ?>
    Please enter an answer.
    <?php } elseif ($correct) { print_r($results); ?>
    <div class='correct'>You got it correct! :-)</div>
    <?php } else { print_r($results); ?>
    <div class='incorrect'> Sorry, that is not correct. :-(

    </div>
    <?php } }
     ?>


    <?php
    if(!isset($results)) { ?>
    <ul class='results'>
        <li>
            <h3>Estimated Jackpot: $<?php echo $total ?>!</h3>
        </li>
        <li>
            <h3>Powerball Results: </h3>
            <span class='balls'>
                <?php echo $ball1 ?>
            </span>
            <span class='balls'>
                <?php echo $ball2 ?>
            </span>
            <span class='balls'>
                <?php echo $ball3 ?>
            </span>
            <span class='balls'>
                <?php echo $ball4 ?>
            </span>
            <span class='balls'>
                <?php echo $ball5 ?>
            </span>
            <span class='powerball'>
                <?php echo $powerball?>
            </span>
        </li>



        <li>
            <h3>Your Picks Powerball Results: </h3>
            <span class='balls'>
                <?php echo $player_ball1 ?>
            </span>
            <span class='balls'>
                <?php echo $player_ball2 ?>
            </span>
            <span class='balls'>
                <?php echo $player_ball3 ?>
            </span>
            <span class='balls'>
                <?php echo $player_ball4; ?>
            </span>
            <span class='balls'>
                <?php echo $player_ball5 ;?>
            </span>
            <span class='powerball'>
                <?php echo $player_powerball;?>
            </span>
        </li>
        <li>
            <h3>Matches: <?php echo $matches ?></h3>
            <?php echo(thisFunction($playerMatches) . $powerballMatch);?>


            <?php foreach ($playerMatches as $match) { ?>
            <span class='ball-match'>
                <?php echo $match; ?>
            </span>
            <?php } ?>




        </li>
        <li>
            <h3>Winnings: <?php echo $winnings; ?></h3>
        </li>
        <li>
            <h3>Player Spent: $<?php echo $cost;?></h3>
        </li>
    </ul>
    <a href="/index.php"> Play Again!</a>
    <?php } 
}else {
    echo $error; 
} ?>
    <a href="/index.php">Try Again!</a>


</body>

</html>