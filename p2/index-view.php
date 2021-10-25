<!DOCTYPE html>
<html lang='en'>

<head>
    <title>Project 2 - PowerBall</title>
    <meta charset='utf-8'>
    <link href=data:, rel=icon>
    <link rel='stylesheet' href='style.css'>
</head>

<body>
    <h1>Project 2 - PowerBall</h1>

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



    <form method='POST' action='results.php'>
        <h2>Select Your Numbers</h2>
        <h4>Choose 5</h4>
        <div class='playersChoice'>
            <span class='selectNumber'>
                <input class="checkboxes" type='checkbox' name='playersNumbers[]' value='1'>
                <label for='1'>1</label>
            </span>
            <span class='selectNumber'>
                <input class="checkboxes" type='checkbox' name='playersNumbers[]' value='2'>
                <label for='2'>2</label>
            </span>
            <span class='selectNumber'>
                <input class="checkboxes" type='checkbox' name='playersNumbers[]' value='3'>
                <label for='3'>3</label>
            </span>
            <span class='selectNumber'>
                <input class="checkboxes" type='checkbox' name='playersNumbers[]' value='4'>
                <label for='4'>4</label>
            </span>
            <span class='selectNumber'>
                <input class="checkboxes" type='checkbox' name='playersNumbers[]' value='5'>
                <label for='5'>5</label>
            </span>
            <span class='selectNumber'>
                <input class="checkboxes" type='checkbox' name='playersNumbers[]' value='6'>
                <label for='6'>6</label>
            </span>
            <span class='selectNumber'>
                <input class="checkboxes" type='checkbox' name='playersNumbers[]' value='7'>
                <label for='7'>7</label>
            </span>
            <span class='selectNumber'>
                <input class="checkboxes" type='checkbox' name='playersNumbers[]' value='8'>
                <label for='8'>8</label>
            </span>
            <span class='selectNumber'>
                <input class="checkboxes" type='checkbox' name='playersNumbers[]' value='9'>
                <label for='9'>9</label>
            </span>
            <span class='selectNumber'>
                <input class="checkboxes" type='checkbox' name='playersNumbers[]' value='10'>
                <label for='10'>10</label>
            </span>
            <span class='selectNumber'>
                <input class="checkboxes" type='checkbox' name='playersNumbers[]' value='11'>
                <label for='11'>11</label>
            </span>
            <span class='selectNumber'>
                <input class="checkboxes" type='checkbox' name='playersNumbers[]' value='12'>
                <label for='12'>12</label>
            </span>
            <span class='selectNumber'>
                <input class="checkboxes" type='checkbox' name='playersNumbers[]' value='13'>
                <label for='13'>13</label>
            </span>
            <span class='selectNumber'>
                <input class="checkboxes" type='checkbox' name='playersNumbers[]' value='14'>
                <label for='14'>14</label>
            </span>
            <span class='selectNumber'>
                <input class="checkboxes" type='checkbox' name='playersNumbers[]' value='15'>
                <label for='15'>15</label>
            </span>
            <span class='selectNumber'>
                <input class="checkboxes" type='checkbox' name='playersNumbers[]' value='16'>
                <label for='16'>16</label>
            </span>
            <span class='selectNumber'>
                <input class="checkboxes" type='checkbox' name='playersNumbers[]' value='17'>
                <label for='17'>17</label>
            </span>
            <span class='selectNumber'>
                <input class="checkboxes" type='checkbox' name='playersNumbers[]' value='18'>
                <label for='18'>18</label>
            </span>
            <span class='selectNumber'>
                <input class="checkboxes" type='checkbox' name='playersNumbers[]' value='19'>
                <label for='19'>19</label>
            </span>
            <span class='selectNumber'>
                <input class="checkboxes" type='checkbox' name='playersNumbers[]' value='20'>
                <label for='20'>20</label>
            </span>
            <span class='selectNumber'>
                <input class="checkboxes" type='checkbox' name='playersNumbers[]' value='21'>
                <label for='21'>21</label>
            </span>
            <span class='selectNumber'>
                <input class="checkboxes" type='checkbox' name='playersNumbers[]' value='22'>
                <label for='22'>22</label>
            </span>
            <span class='selectNumber'>
                <input class="checkboxes" type='checkbox' name='playersNumbers[]' value='23'>
                <label for='23'>23</label>
            </span>
            <span class='selectNumber'>
                <input class="checkboxes" type='checkbox' name='playersNumbers[]' value='24'>
                <label for='24'>24</label>
            </span>
            <span class='selectNumber'>
                <input class="checkboxes" type='checkbox' name='playersNumbers[]' value='25'>
                <label for='25'>25</label>
            </span>
            <span class='selectNumber'>
                <input class="checkboxes" type='checkbox' name='playersNumbers[]' value='26'>
                <label for='26'>26</label>
            </span>
            <span class='selectNumber'>
                <input class="checkboxes" type='checkbox' name='playersNumbers[]' value='27'>
                <label for='27'>27</label>
            </span>
            <span class='selectNumber'>
                <input class="checkboxes" type='checkbox' name='playersNumbers[]' value='28'>
                <label for='28'>28</label>
            </span>
            <span class='selectNumber'>
                <input class="checkboxes" type='checkbox' name='playersNumbers[]' value='29'>
                <label for='29'>29</label>
            </span>
            <span class='selectNumber'>
                <input class="checkboxes" type='checkbox' name='playersNumbers[]' value='30'>
                <label for='30'>30</label>
            </span>
            <span class='selectNumber'>
                <input class="checkboxes" type='checkbox' name='playersNumbers[]' value='31'>
                <label for='31'>31</label>
            </span>
            <span class='selectNumber'>
                <input class="checkboxes" type='checkbox' name='playersNumbers[]' value='32'>
                <label for='32'>32</label>
            </span>
            <span class='selectNumber'>
                <input class="checkboxes" type='checkbox' name='playersNumbers[]' value='33'>
                <label for='33'>33</label>
            </span>
            <span class='selectNumber'>
                <input class="checkboxes" type='checkbox' name='playersNumbers[]' value='34'>
                <label for='34'>34</label>
            </span>
            <span class='selectNumber'>
                <input class="checkboxes" type='checkbox' name='playersNumbers[]' value='35'>
                <label for='35'>35</label>
            </span>
            <span class='selectNumber'>
                <input class="checkboxes" type='checkbox' name='playersNumbers[]' value='36'>
                <label for='36'>36</label>
            </span>
            <span class='selectNumber'>
                <input class="checkboxes" type='checkbox' name='playersNumbers[]' value='37'>
                <label for='37'>37</label>
            </span>
            <span class='selectNumber'>
                <input class="checkboxes" type='checkbox' name='playersNumbers[]' value='38'>
                <label for='38'>38</label>
            </span>
            <span class='selectNumber'>
                <input class="checkboxes" type='checkbox' name='playersNumbers[]' value='39'>
                <label for='39'>39</label>
            </span>
            <span class='selectNumber'>
                <input class="checkboxes" type='checkbox' name='playersNumbers[]' value='40'>
                <label for='40'>40</label>
            </span>
            <span class='selectNumber'>
                <input class="checkboxes" type='checkbox' name='playersNumbers[]' value='41'>
                <label for='41'>41</label>
            </span>
            <span class='selectNumber'>
                <input class="checkboxes" type='checkbox' name='playersNumbers[]' value='42'>
                <label for='42'>42</label>
            </span>
            <span class='selectNumber'>
                <input class="checkboxes" type='checkbox' name='playersNumbers[]' value='43'>
                <label for='43'>43</label>
            </span>
            <span class='selectNumber'>
                <input class="checkboxes" type='checkbox' name='playersNumbers[]' value='44'>
                <label for='44'>44</label>
            </span>
            <span class='selectNumber'>
                <input class="checkboxes" type='checkbox' name='playersNumbers[]' value='45'>
                <label for='45'>45</label>
            </span>
            <span class='selectNumber'>
                <input class="checkboxes" type='checkbox' name='playersNumbers[]' value='46'>
                <label for='46'>46</label>
            </span>
            <span class='selectNumber'>
                <input class="checkboxes" type='checkbox' name='playersNumbers[]' value='47'>
                <label for='47'>47</label>
            </span>
            <span class='selectNumber'>
                <input class="checkboxes" type='checkbox' name='playersNumbers[]' value='48'>
                <label for='48'>48</label>
            </span>
            <span class='selectNumber'>
                <input class="checkboxes" type='checkbox' name='playersNumbers[]' value='49'>
                <label for='49'>49</label>
            </span>
            <span class='selectNumber'>
                <input class="checkboxes" type='checkbox' name='playersNumbers[]' value='50'>
                <label for='50'>50</label>
            </span>
            <span class='selectNumber'>
                <input class="checkboxes" type='checkbox' name='playersNumbers[]' value='51'>
                <label for='51'>51</label>
            </span>
            <span class='selectNumber'>
                <input class="checkboxes" type='checkbox' name='playersNumbers[]' value='52'>
                <label for='52'>52</label>
            </span>
            <span class='selectNumber'>
                <input class="checkboxes" type='checkbox' name='playersNumbers[]' value='53'>
                <label for='53'>53</label>
            </span>
            <span class='selectNumber'>
                <input class="checkboxes" type='checkbox' name='playersNumbers[]' value='54'>
                <label for='54'>54</label>
            </span>
            <span class='selectNumber'>
                <input class="checkboxes" type='checkbox' name='playersNumbers[]' value='55'>
                <label for='55'>55</label>
            </span>
            <span class='selectNumber'>
                <input class="checkboxes" type='checkbox' name='playersNumbers[]' value='56'>
                <label for='56'>56</label>
            </span>
            <span class='selectNumber'>
                <input class="checkboxes" type='checkbox' name='playersNumbers[]' value='57'>
                <label for='57'>57</label>
            </span>
            <span class='selectNumber'>
                <input class="checkboxes" type='checkbox' name='playersNumbers[]' value='58'>
                <label for='58'>58</label>
            </span>
            <span class='selectNumber'>
                <input class="checkboxes" type='checkbox' name='playersNumbers[]' value='59'>
                <label for='59'>59</label>
            </span>
            <span class='selectNumber'>
                <input class="checkboxes" type='checkbox' name='playersNumbers[]' value='60'>
                <label for='60'>60</label>
            </span>
            <span class='selectNumber'>
                <input class="checkboxes" type='checkbox' name='playersNumbers[]' value='61'>
                <label for='61'>61</label>
            </span>
            <span class='selectNumber'>
                <input class="checkboxes" type='checkbox' name='playersNumbers[]' value='62'>
                <label for='62'>62</label>
            </span>
            <span class='selectNumber'>
                <input class="checkboxes" type='checkbox' name='playersNumbers[]' value='63'>
                <label for='63'>63</label>
            </span>
            <span class='selectNumber'>
                <input class="checkboxes" type='checkbox' name='playersNumbers[]' value='64'>
                <label for='64'>64</label>
            </span>
            <span class='selectNumber'>
                <input class="checkboxes" type='checkbox' name='playersNumbers[]' value='5'>
                <label for='65'>65</label>
            </span>
            <span class='selectNumber'>
                <input class="checkboxes" type='checkbox' name='playersNumbers[]' value='66'>
                <label for='66'>66</label>
            </span>
            <span class='selectNumber'>
                <input class="checkboxes" type='checkbox' name='playersNumbers[]' value='67'>
                <label for='67'>67</label>
            </span>
            <span class='selectNumber'>
                <input class="checkboxes" type='checkbox' name='playersNumbers[]' value='68'>
                <label for='68'>68</label>
            </span>
            <span class='selectNumber'>
                <input class="checkboxes" type='checkbox' name='playersNumbers[]' value='69'>
                <label for='69'>69</label>
            </span>

        </div>
        <h2>Pick a Powerball Number - Select 1</h2>
        <h4>Choose 1</h4>
        <div class='playersChoice'>
            <span class='selectPowerball'>
                <input class="checkboxes" type='checkbox' name='playerPowerball' value='1'>
                <label for='1'>1</label>
            </span>
            <span class='selectPowerball'>
                <input class="checkboxes" type='checkbox' name='playerPowerball' value='2'>
                <label for='2'>2</label>
            </span>
            <span class='selectPowerball'>
                <input class="checkboxes" type='checkbox' name='playerPowerball' value='3'>
                <label for='3'>3</label>
            </span>
            <span class='selectPowerball'>
                <input class="checkboxes" type='checkbox' name='playerPowerball' value='4'>
                <label for='4'>4</label>
            </span>
            <span class='selectPowerball'>
                <input class="checkboxes" type='checkbox' name='playerPowerball' value='5'>
                <label for='5'>5</label>
            </span>
            <span class='selectPowerball'>
                <input class="checkboxes" type='checkbox' name='playerPowerball' value='6'>
                <label for='6'>6</label>
            </span>
            <span class='selectPowerball'>
                <input class="checkboxes" type='checkbox' name='playerPowerball' value='7'>
                <label for='7'>7</label>
            </span>
            <span class='selectPowerball'>
                <input class="checkboxes" type='checkbox' name='playerPowerball' value='8'>
                <label for='8'>8</label>
            </span>
            <span class='selectPowerball'>
                <input class="checkboxes" type='checkbox' name='playerPowerball' value='9'>
                <label for='9'>9</label>
            </span>
            <span class='selectPowerball'>
                <input class="checkboxes" type='checkbox' name='playerPowerball' value='10'>
                <label for='10'>10</label>
            </span>
            <span class='selectPowerball'>
                <input class="checkboxes" type='checkbox' name='playerPowerball' value='11'>
                <label for='11'>11</label>
            </span>
            <span class='selectPowerball'>
                <input class="checkboxes" type='checkbox' name='playerPowerball' value='12'>
                <label for='12'>12</label>
            </span>
            <span class='selectPowerball'>
                <input class="checkboxes" type='checkbox' name='playerPowerball' value='13'>
                <label for='13'>13</label>
            </span>
            <span class='selectPowerball'>
                <input class="checkboxes" type='checkbox' name='playerPowerball' value='14'>
                <label for='14'>14</label>
            </span>
            <span class='selectPowerball'>
                <input class="checkboxes" type='checkbox' name='playerPowerball' value='15'>
                <label for='15'>15</label>
            </span>
            <span class='selectPowerball'>
                <input class="checkboxes" type='checkbox' name='playerPowerball' value='16'>
                <label for='16'>16</label>
            </span>
            <span class='selectPowerball'>
                <input class="checkboxes" type='checkbox' name='playerPowerball' value='17'>
                <label for='17'>17</label>
            </span>
            <span class='selectPowerball'>
                <input class="checkboxes" type='checkbox' name='playerPowerball' value='18'>
                <label for='18'>18</label>
            </span>
            <span class='selectPowerball'>
                <input class="checkboxes" type='checkbox' name='playerPowerball' value='19'>
                <label for='19'>19</label>
            </span>
            <span class='selectPowerball'>
                <input class="checkboxes" type='checkbox' name='playerPowerball' value='20'>
                <label for='20'>20</label>
            </span>
            <span class='selectPowerball'>
                <input class="checkboxes" type='checkbox' name='playerPowerball' value='21'>
                <label for='21'>21</label>
            </span>
            <span class='selectPowerball'>
                <input class="checkboxes" type='checkbox' name='playerPowerball' value='22'>
                <label for='22'>22</label>
            </span>
            <span class='selectPowerball'>
                <input class="checkboxes" type='checkbox' name='playerPowerball' value='23'>
                <label for='23'>23</label>
            </span>
            <span class='selectPowerball'>
                <input class="checkboxes" type='checkbox' name='playerPowerball' value='24'>
                <label for='24'>24</label>
            </span>
            <span class='selectPowerball'>
                <input class="checkboxes" type='checkbox' name='playerPowerball' value='25'>
                <label for='25'>25</label>
            </span>
            <span class='selectPowerball'>
                <input class="checkboxes" type='checkbox' name='playerPowerball' value='26'>
                <label for='26'>26</label>
            </span>

        </div>
        <button type='submit'>Submit</button>

    </form>



    <h3>Winnings: <?php echo $winnings ?></h3>
    <?php if(isset($_SESSION['results'])) { ?>
    <h3>Player Spent: $<?php echo $cost; ?></h3>
    <?php } else { ?> <h3>Player Cost: $<?php echo $cost;?></h3>
    <?php } ?>



</body>

</html>