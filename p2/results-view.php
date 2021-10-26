<!DOCTYPE html>
<html lang='en'>

<head>
    <title>Project 2 - Powerball Results</title>
    <meta charset='utf-8'>
    <link href=data:, rel=icon>
    <link rel='stylesheet' href='style.css'>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>
    <h1>Project 2 - Powerball</h1>
    <?php 
    #Checks to see if theres an error with the form
    if ($error) { ?>
    <section class='border'>
        <h3><?php echo $error_message; ?> </h3>
        <h4> You selected: </h4>
        <?php
        #Checks to see if player numbers and powerball are '', if not, then nothing
        if ($player_numbers == '' && $player_powerball == '') { ?>
        <h4>NOTHING!</h4><?php
        } elseif ($player_numbers !== '' && $player_powerball !== '') {
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
        } elseif ($player_numbers !== '') {
            foreach ($player_numbers as $index) { ?>
        <span class='ball'>
            <?php echo $index; ?>
        </span>
        <?php
            };
        } elseif ($player_powerball !== '') {
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
        <br>
        <div class='flex'>
            <a href='/index.php'> <button>Play Again!</button></a>
        </div>
    </section>
    <?php
    } elseif (!$error){ ?>
    <section class='border'>

        <h2>Estimated Jackpot: $<?php echo $total ?>!</h2>

        <h2>Powerball Results: </h2>
        <div class='flex'>
            <?php foreach ($winning_numbers as $ball) { ?>
            <span class='ball winning'>
                <?php echo $ball; ?>
            </span>
            <?php } ?>
            <span class='powerball winning'>
                <?php echo $powerball?>
            </span>
        </div>
        <hr>
        <h2>Your Picks: </h2>
        <div class='flex'>
            <?php foreach ($player_numbers as $num) { ?>
            <span class='ball'>
                <?php echo $num; ?>
            </span>
            <?php } ?>
            <span class='powerball'>
                <?php echo $player_powerball;?>
            </span>
        </div>
        <br>
        <h2>Matches: <?php if($matches_found === 'jackpot') { ?>
            Five Matches + Powerball <br> <br> <span class='jackpot'> YOU HAVE WON THE JACKPOT!</span>
            <?php 
    } else {
        echo $matches_found;
    }
     ?></h2>
        <div class='flex'>
            <?php foreach ($player_matches as $match) { ?>
            <span class='ball match'>
                <?php echo $match; ?>
            </span>
            <?php } if(isset($powerball_match)) { ?>
            <span class='powerball match'>
                <?php echo $powerball ?>
            </span>
        </div>
        <?php

    }  ?>

    </section>
    <section>
        <h2> Winnings: <?php echo $winnings; ?></h2>
        <br>
        <h2>Game Cost: $<?php echo $cost;?></h2>
        <div class='flex'>
            <a href='/index.php'> <button>Play Again!</button></a>
        </div>

        <?php } ?>
    </section>
</body>

</html>