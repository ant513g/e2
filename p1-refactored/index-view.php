<!DOCTYPE html>
<html lang='en'>

<head>
    <title>Project 1 - PowerBall</title>
    <meta charset='utf-8'>
    <link href=data:, rel=icon>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Project 1 - PowerBall</h1>

    <h2>Mechanics</h2>
    <ul>
        <li>Each play will cost the player $2</li>
        <li>Choosing Numbers - The player will have the option to either:
            <ul>
                <li>Select five numbers in acending order from 1 to 69 for the white balls
                    and one number from 1 to 26 for the red ball, the PowerBall. (For this version, this is option is
                    not
                    included). </li>
                <li>Quickpick - Have random numbers picked for the player.</li>
            </ul>
        </li>
        <li>The computer will randomly generate 5 numbers from 1 to 69 for the white balls, and 1 for PowerBall from 1
            to 26 for the drawing.</li>
        <li>If the player's ball numbers does not match any of the drawn ball numbers, the player does not win.</li>
        <li><b>Winning Prizes:</b> Depending on the number of matches the player may receive a prize.
            <ul>
                <li>If the player matches all 5 white ball numbers and the PowerBall to the ball numbers drawn, the
                    player wins
                    the Jackpot!(The player wins 68% of the total jackpot).</li>
                <li>If the player only matches the 5 white ball numbers to the ball numbers drawn, the player wins the
                    second prize
                    of $1,000,000.</li>
                <li>If the player matches 4 white ball numbers and the PowerBall, the player wins the third prize of
                    $50,000.</li>
                <li>If the player only matches 4 white ball numbers, the player wins the fourth prize of $100.</li>
                <li>If the player matches 3 white ball numbers and the PowerBall, the player wins the fifth prize of
                    $100.</li>
                <li>If the player only matches 3 white ball numbers, the player wins the sixth prize of $7.</li>
                <li>If the player matches 2 white ball numbers and the PowerBall, the player wins the seventh prize of
                    $7.</li>
                <li>If the player matches 1 white ball number and the PowerBall, the player wins the eighth prize of $4.
                </li>
                <li>If the play only matches the PowerBall, the player wins the ninth prize of $4.</li>
                <li><u>Note:</u> If the player matches 2 white ball numbers or 1 white ball number, the player does not
                    win a prize. </li>
            </ul>
        </li>
    </ul>

    <h2>Results</h2>
    <ul class="results">
        <li>
            <h3>Estimated Jackpot: $<?php echo $total?>!</h3>
        </li>
        <li>
            <h3>Powerball Results: </h3>
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
        </li>
        <li>
            <h3>Player's Numbers: Quickpick</h3>

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
        </li>
        <li>
            <h3>Matches: <?php echo $matches ?></h3>
            <?php echo(thisFunction($playerMatches) . $powerballMatch);?>
        </li>
        <li>
            <h3>Winings: <?php echo $winnings ?></h3>
        </li>
        <li>
            <h3>Player Spent: $<?php echo $cost;?></h3>
        </li>
    </ul>

</body>

</html>