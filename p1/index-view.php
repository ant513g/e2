<!DOCTYPE html>
<html lang='en'>

<head>
    <title>Project 1</title>
    <meta charset='utf-8'>
    <link href=data:, rel=icon>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Project 1</h1>

    <h2>Mechanics</h2>
    <ul>
        <li>...</li>
    </ul>

    <h2>Results</h2>
    <ul>
        <li>...</li>
    </ul>


    <h2>Player Spent: $<?php echo $cost?></h2>
    <h2>Powerball Results: </h2>
    <span class="balls">
        <?php echo $ball1 ?>
    </span>
    <span class="balls">
        <?php echo $ball2 ?>
    </span>
    <span class="balls">
        <?php echo $ball3 ?>
    </span>
    <span class="balls">
        <?php echo $ball4 ?>
    </span>
    <span class="balls">
        <?php echo $ball5 ?>
    </span>
    <span class="powerball">
        <?php echo $powerball?>
    </span>



    <h2>Player's Numbers</h2>

    <span class="balls">
        <?php echo $player_ball1 ?>
    </span>
    <span class="balls">
        <?php echo $player_ball2 ?>
    </span>
    <span class="balls">
        <?php echo $player_ball3 ?>
    </span>
    <span class="balls">
        <?php echo $player_ball4 ?>
    </span>
    <span class="balls">
        <?php echo $player_ball5 ?>
    </span>
    <span class="powerball">
        <?php echo $player_powerball?>
    </span>

    <h2>Matches: <?php echo $matches  ?></h2>



    <?php 
    echo thisFunction($playerMatches); 
    echo($powerballMatch);?>
    <h2>Winings: <?php echo $winnings ?></h2>


</body>

</html>