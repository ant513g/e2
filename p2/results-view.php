<!DOCTYPE html>
<html lang='en'>

<head>
    <title>Project 2 - Powerball Results</title>
    <meta charset='utf-8'>
    <link href=data:, rel=icon>
    <link rel='stylesheet' href='style.css'>
</head>

<body>
    <h1>Project 2 - Powerball</h1>


    <?php 
    #Checks to see if theres an error with the form
    if ($error) { ?>

    <h3><?php echo $error_message; ?> </h3>
    <h4> You selected: </h4>
    <?php
    #Checks to see if player numbers and powerball are set, if not, then nothing
    if (!isset($player_numbers) && !isset($player_powerball)) { ?>
    <h4>NOTHING!</h4><?php
    } elseif (isset($player_numbers) && isset($player_powerball)) {
        foreach ($player_numbers as $index) { ?>
    <span class='ball'>
        <?php echo $index; ?>
    </span>
    <?php
         };
        foreach ($player_powerball as $value) { ?>
    <span class='powerball'>
        <?php echo $value; ?>
    </span>
    <?php
        }
    } elseif (isset($player_numbers)) {
        foreach ($player_numbers as $index) { ?>
    <span class='ball'>
        <?php echo $index; ?>
    </span>
    <?php
        };
    } elseif (isset($player_powerball)) {
        foreach ($player_powerball as $value) { ?>
    <span class='powerball'>
        <?php echo $value; ?>
    </span>
    <?php
        };
    } else { ?>
    <h4> NOTHING!</h4>
    <?php
            
    }?>


    <br><br>
    <a href="/index.php"> Try Again!</a>
    <?php
} elseif (!$error){ ?>


    <h3>Estimated Jackpot: $<?php echo $total ?>!</h3>

    <h3>Powerball Results: </h3>
    <?php foreach ($winning_numbers as $ball) { ?>
    <span class='ball'>
        <?php echo $ball; ?>
    </span>
    <?php } ?>
    <span class='powerball'>
        <?php echo $powerball?>
    </span>

    <h3>Your Picks: </h3>
    <?php foreach ($player_numbers as $num) { ?>
    <span class='ball'>
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

    <h3> Winnings: <?php echo $winnings; ?></h3>
    <h3>Game Cost: $<?php echo $cost;?></h3>
    <br>
    <a href="/index.php"> Play Again!</a>

    <?php } ?>

</body>

</html>