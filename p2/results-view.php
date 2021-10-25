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
    <?php
    if($error) {
        echo $errorMessage; ?>
    <h4> You selected: </h4>
    <?php 
        if(isset($answer)) {
            foreach ($answer as $index) { ?>
    <span class='balls'>
        <?php echo $index; ?>
    </span>
    <?php };
        } 
        elseif(isset($player_powerball)) {
            foreach ($player_powerball as $value) { ?>
    <span class='powerball'>
        <?php echo $value; ?>
    </span>
    <?php };
             } else { ?>
    <h4> NOTHING!</h4>
    <?php
            } 
        ?>


    <br>
    <a href="/index.php"> Try Again!</a>
    <?php
    }
    elseif(!$error)
     { ?>
    <h3>Estimated Jackpot: $<?php echo $total ?>!</h3>

    <h3>Powerball Results: </h3>
    <?php foreach ($drawing as $balls) { ?>
    <span class='balls'>
        <?php echo $balls; ?>
    </span>
    <?php } ?>
    <span class='powerball'>
        <?php echo $powerball?>
    </span>

    <h3>Your Picks: </h3>
    <?php foreach ($playerNum as $num) { ?>
    <span class='balls'>
        <?php echo $num; ?>
    </span>
    <?php } ?>
    <span class='powerball'>
        <?php echo $player_powerball;?>
    </span>

    <h3>Matches: <?php echo $matches ?></h3>
    <?php foreach ($playerMatches as $match) { ?>
    <span class='ball-match'>
        <?php echo $match; ?>
    </span>
    <?php } echo $powerballMatch;?>

    <h3> Total Winnings: <?php echo $winnings; ?></h3>
    <h3>Game Cost: $<?php echo $cost;?></h3>

    <a href="/index.php"> Play Again!</a>

    <?php 
    }  ?>

</body>

</html>