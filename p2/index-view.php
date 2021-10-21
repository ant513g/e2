<!DOCTYPE html>
<html lang='en'>

<head>
    <title>Project 2 - PowerBall</title>
    <meta charset='utf-8'>
    <link href=data:, rel=icon>
    <link rel='stylesheet' href='style.css'>
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




    <form method='POST' action='process.php'>
        <input type='radio' name='choiceType' id='quickpick'>Quickpick</input>
        <input type='radio' name='choiceType' id='playersChoice'>Pick Own Numbers</input>

        <div class='quickpick'>
            <h3>Player's Numbers: Quickpick</h3>
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
                <?php echo $player_ball4 ?>
            </span>
            <span class='balls'>
                <?php echo $player_ball5 ?>
            </span>
            <span class='powerball'>
                <?php echo $player_powerball?>
            </span>
            <button id='changeNumbers'>Change Numbers</button>
        </div>

        <div class='playersChoice'>
            <h1>Choose Numbers</h1>
            <label for='ball1'>Ball 1</label>
            <br>
            <select class='balls' name='ball1'>
                <option value='1'>1</option>
                <option value='2'>2</option>
                <option value='3'>3</option>
                <option value='4'>4</option>
                <option value='5'>5</option>
                <option value='6'>6</option>
                <option value='7'>7</option>
                <option value='8'>8</option>
                <option value='9'>9</option>
                <option value='10'>10</option>
                <option value='11'>11</option>
                <option value='12'>12</option>
                <option value='13'>13</option>
                <option value='14'>14</option>
                <option value='15'>15</option>
                <option value='16'>16</option>
                <option value='17'>17</option>
                <option value='18'>18</option>
                <option value='19'>19</option>
                <option value='20'>20</option>
                <option value='21'>21</option>
                <option value='22'>22</option>
                <option value='23'>23</option>
                <option value='24'>24</option>
                <option value='25'>25</option>
                <option value='26'>26</option>
                <option value='27'>27</option>
                <option value='28'>28</option>
                <option value='29'>29</option>
                <option value='30'>30</option>
                <option value='31'>31</option>
                <option value='32'>32</option>
                <option value='33'>33</option>
                <option value='34'>34</option>
                <option value='35'>35</option>
                <option value='36'>36</option>
                <option value='37'>37</option>
                <option value='38'>38</option>
                <option value='39'>39</option>
                <option value='40'>40</option>
                <option value='41'>41</option>
                <option value='42'>42</option>
                <option value='43'>43</option>
                <option value='44'>44</option>
                <option value='45'>45</option>
                <option value='46'>46</option>
                <option value='47'>47</option>
                <option value='48'>48</option>
                <option value='49'>49</option>
                <option value='50'>50</option>
                <option value='51'>51</option>
                <option value='52'>52</option>
                <option value='53'>53</option>
                <option value='54'>54</option>
                <option value='55'>55</option>
                <option value='56'>56</option>
                <option value='57'>57</option>
                <option value='58'>58</option>
                <option value='59'>59</option>
                <option value='60'>60</option>
                <option value='61'>61</option>
                <option value='62'>62</option>
                <option value='63'>63</option>
                <option value='64'>64</option>
                <option value='65'>65</option>
                <option value='66'>66</option>
                <option value='67'>67</option>
                <option value='68'>68</option>
                <option value='69'>69</option>
            </select>
            <br>
            <label for='ball2'>Ball 2</label>
            <br>
            <select class='balls' name='ball2'>
                <option value='1'>1</option>
                <option value='2'>2</option>
                <option value='3'>3</option>
                <option value='4'>4</option>
                <option value='5'>5</option>
                <option value='6'>6</option>
                <option value='7'>7</option>
                <option value='8'>8</option>
                <option value='9'>9</option>
                <option value='10'>10</option>
                <option value='11'>11</option>
                <option value='12'>12</option>
                <option value='13'>13</option>
                <option value='14'>14</option>
                <option value='15'>15</option>
                <option value='16'>16</option>
                <option value='17'>17</option>
                <option value='18'>18</option>
                <option value='19'>19</option>
                <option value='20'>20</option>
                <option value='21'>21</option>
                <option value='22'>22</option>
                <option value='23'>23</option>
                <option value='24'>24</option>
                <option value='25'>25</option>
                <option value='26'>26</option>
                <option value='27'>27</option>
                <option value='28'>28</option>
                <option value='29'>29</option>
                <option value='30'>30</option>
                <option value='31'>31</option>
                <option value='32'>32</option>
                <option value='33'>33</option>
                <option value='34'>34</option>
                <option value='35'>35</option>
                <option value='36'>36</option>
                <option value='37'>37</option>
                <option value='38'>38</option>
                <option value='39'>39</option>
                <option value='40'>40</option>
                <option value='41'>41</option>
                <option value='42'>42</option>
                <option value='43'>43</option>
                <option value='44'>44</option>
                <option value='45'>45</option>
                <option value='46'>46</option>
                <option value='47'>47</option>
                <option value='48'>48</option>
                <option value='49'>49</option>
                <option value='50'>50</option>
                <option value='51'>51</option>
                <option value='52'>52</option>
                <option value='53'>53</option>
                <option value='54'>54</option>
                <option value='55'>55</option>
                <option value='56'>56</option>
                <option value='57'>57</option>
                <option value='58'>58</option>
                <option value='59'>59</option>
                <option value='60'>60</option>
                <option value='61'>61</option>
                <option value='62'>62</option>
                <option value='63'>63</option>
                <option value='64'>64</option>
                <option value='65'>65</option>
                <option value='66'>66</option>
                <option value='67'>67</option>
                <option value='68'>68</option>
                <option value='69'>69</option>
            </select>
            <br>
            <label for='ball3'>Ball 3</label>
            <br>
            <select class='balls' name='ball3'>
                <option value='1'>1</option>
                <option value='2'>2</option>
                <option value='3'>3</option>
                <option value='4'>4</option>
                <option value='5'>5</option>
                <option value='6'>6</option>
                <option value='7'>7</option>
                <option value='8'>8</option>
                <option value='9'>9</option>
                <option value='10'>10</option>
                <option value='11'>11</option>
                <option value='12'>12</option>
                <option value='13'>13</option>
                <option value='14'>14</option>
                <option value='15'>15</option>
                <option value='16'>16</option>
                <option value='17'>17</option>
                <option value='18'>18</option>
                <option value='19'>19</option>
                <option value='20'>20</option>
                <option value='21'>21</option>
                <option value='22'>22</option>
                <option value='23'>23</option>
                <option value='24'>24</option>
                <option value='25'>25</option>
                <option value='26'>26</option>
                <option value='27'>27</option>
                <option value='28'>28</option>
                <option value='29'>29</option>
                <option value='30'>30</option>
                <option value='31'>31</option>
                <option value='32'>32</option>
                <option value='33'>33</option>
                <option value='34'>34</option>
                <option value='35'>35</option>
                <option value='36'>36</option>
                <option value='37'>37</option>
                <option value='38'>38</option>
                <option value='39'>39</option>
                <option value='40'>40</option>
                <option value='41'>41</option>
                <option value='42'>42</option>
                <option value='43'>43</option>
                <option value='44'>44</option>
                <option value='45'>45</option>
                <option value='46'>46</option>
                <option value='47'>47</option>
                <option value='48'>48</option>
                <option value='49'>49</option>
                <option value='50'>50</option>
                <option value='51'>51</option>
                <option value='52'>52</option>
                <option value='53'>53</option>
                <option value='54'>54</option>
                <option value='55'>55</option>
                <option value='56'>56</option>
                <option value='57'>57</option>
                <option value='58'>58</option>
                <option value='59'>59</option>
                <option value='60'>60</option>
                <option value='61'>61</option>
                <option value='62'>62</option>
                <option value='63'>63</option>
                <option value='64'>64</option>
                <option value='65'>65</option>
                <option value='66'>66</option>
                <option value='67'>67</option>
                <option value='68'>68</option>
                <option value='69'>69</option>
            </select>
            <br>
            <label for='ball4'>Ball 4</label>
            <br>
            <select class='balls' name='ball4'>
                <option value='1'>1</option>
                <option value='2'>2</option>
                <option value='3'>3</option>
                <option value='4'>4</option>
                <option value='5'>5</option>
                <option value='6'>6</option>
                <option value='7'>7</option>
                <option value='8'>8</option>
                <option value='9'>9</option>
                <option value='10'>10</option>
                <option value='11'>11</option>
                <option value='12'>12</option>
                <option value='13'>13</option>
                <option value='14'>14</option>
                <option value='15'>15</option>
                <option value='16'>16</option>
                <option value='17'>17</option>
                <option value='18'>18</option>
                <option value='19'>19</option>
                <option value='20'>20</option>
                <option value='21'>21</option>
                <option value='22'>22</option>
                <option value='23'>23</option>
                <option value='24'>24</option>
                <option value='25'>25</option>
                <option value='26'>26</option>
                <option value='27'>27</option>
                <option value='28'>28</option>
                <option value='29'>29</option>
                <option value='30'>30</option>
                <option value='31'>31</option>
                <option value='32'>32</option>
                <option value='33'>33</option>
                <option value='34'>34</option>
                <option value='35'>35</option>
                <option value='36'>36</option>
                <option value='37'>37</option>
                <option value='38'>38</option>
                <option value='39'>39</option>
                <option value='40'>40</option>
                <option value='41'>41</option>
                <option value='42'>42</option>
                <option value='43'>43</option>
                <option value='44'>44</option>
                <option value='45'>45</option>
                <option value='46'>46</option>
                <option value='47'>47</option>
                <option value='48'>48</option>
                <option value='49'>49</option>
                <option value='50'>50</option>
                <option value='51'>51</option>
                <option value='52'>52</option>
                <option value='53'>53</option>
                <option value='54'>54</option>
                <option value='55'>55</option>
                <option value='56'>56</option>
                <option value='57'>57</option>
                <option value='58'>58</option>
                <option value='59'>59</option>
                <option value='60'>60</option>
                <option value='61'>61</option>
                <option value='62'>62</option>
                <option value='63'>63</option>
                <option value='64'>64</option>
                <option value='65'>65</option>
                <option value='66'>66</option>
                <option value='67'>67</option>
                <option value='68'>68</option>
                <option value='69'>69</option>
            </select>
            <br>
            <label for='ball5'>Ball 5</label>
            <br>
            <select class='balls' name='ball5'>
                <option value='1'>1</option>
                <option value='2'>2</option>
                <option value='3'>3</option>
                <option value='4'>4</option>
                <option value='5'>5</option>
                <option value='6'>6</option>
                <option value='7'>7</option>
                <option value='8'>8</option>
                <option value='9'>9</option>
                <option value='10'>10</option>
                <option value='11'>11</option>
                <option value='12'>12</option>
                <option value='13'>13</option>
                <option value='14'>14</option>
                <option value='15'>15</option>
                <option value='16'>16</option>
                <option value='17'>17</option>
                <option value='18'>18</option>
                <option value='19'>19</option>
                <option value='20'>20</option>
                <option value='21'>21</option>
                <option value='22'>22</option>
                <option value='23'>23</option>
                <option value='24'>24</option>
                <option value='25'>25</option>
                <option value='26'>26</option>
                <option value='27'>27</option>
                <option value='28'>28</option>
                <option value='29'>29</option>
                <option value='30'>30</option>
                <option value='31'>31</option>
                <option value='32'>32</option>
                <option value='33'>33</option>
                <option value='34'>34</option>
                <option value='35'>35</option>
                <option value='36'>36</option>
                <option value='37'>37</option>
                <option value='38'>38</option>
                <option value='39'>39</option>
                <option value='40'>40</option>
                <option value='41'>41</option>
                <option value='42'>42</option>
                <option value='43'>43</option>
                <option value='44'>44</option>
                <option value='45'>45</option>
                <option value='46'>46</option>
                <option value='47'>47</option>
                <option value='48'>48</option>
                <option value='49'>49</option>
                <option value='50'>50</option>
                <option value='51'>51</option>
                <option value='52'>52</option>
                <option value='53'>53</option>
                <option value='54'>54</option>
                <option value='55'>55</option>
                <option value='56'>56</option>
                <option value='57'>57</option>
                <option value='58'>58</option>
                <option value='59'>59</option>
                <option value='60'>60</option>
                <option value='61'>61</option>
                <option value='62'>62</option>
                <option value='63'>63</option>
                <option value='64'>64</option>
                <option value='65'>65</option>
                <option value='66'>66</option>
                <option value='67'>67</option>
                <option value='68'>68</option>
                <option value='69'>69</option>
            </select>
            <br>
            <label for='powerball'>PowerBall</label>
            <br>
            <select class='powerball' name='powerball'>
                <option value='1'>1</option>
                <option value='2'>2</option>
                <option value='3'>3</option>
                <option value='4'>4</option>
                <option value='5'>5</option>
                <option value='6'>6</option>
                <option value='7'>7</option>
                <option value='8'>8</option>
                <option value='9'>9</option>
                <option value='10'>10</option>
                <option value='11'>11</option>
                <option value='12'>12</option>
                <option value='13'>13</option>
                <option value='14'>14</option>
                <option value='15'>15</option>
                <option value='16'>16</option>
                <option value='17'>17</option>
                <option value='18'>18</option>
                <option value='19'>19</option>
                <option value='20'>20</option>
                <option value='21'>21</option>
                <option value='22'>22</option>
                <option value='23'>23</option>
                <option value='24'>24</option>
                <option value='25'>25</option>
                <option value='26'>26</option>
            </select>
            <br>
            <button type='submit'>Submit</button>
        </div>
    </form>


    <?php if(isset($results)) { ?>
    <h1>Results</h1>
    <?php if ($haveAnswer == false) { ?>
    Please enter an answer.
    <?php } elseif ($correct) { ?>
    <div class='correct'>You got it correct! :-)</div>
    <?php } else { ?>
    <div class='incorrect'>Sorry, that is not correct. :-(

    </div>
    <?php } }
     ?>





    <h2>Results</h2>
    <ul class='results'>
        <li>
            <h3>Estimated Jackpot: $<?php echo $total?>!</h3>
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
            <h3>Matches: <?php echo $matches ?></h3>
            <!-- <?php echo(thisFunction($playerMatches) . $powerballMatch);?> -->


            <?php foreach($playerMatches as $match) { ?>
            <span class='ball-match'>
                <?php echo $match ?>
            </span>


            <?php } ?>

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