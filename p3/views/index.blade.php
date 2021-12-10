@extends('templates/master')

@section('title')
 P3 - Powerball
@endsection

@section('content')
  <h1><b>${{ $total }}</b></h1>
  <h1>Project 3 - Powerball</h1>
  <div class='flex-center'>
    <a href='/winnings'> <button>My Winnings!</button></a>
    <a href='/results'> <button>View Results!</button></a>
  </div>
  
    
   



  <section class='instructions'>
    <h2>How to Play:</h2>
      <ul>
        <li>Each play will cost the player $2</li>
        <li>Choosing Numbers - The player will select five numbers in acending order from 1 to 69 for the white
            balls
            and one number from 1 to 26 for the red ball, the Powerball. </li>
        </li>
        <li>The computer will randomly generate 5 winnings numbers from 1 to 69 for the white balls, and 1 for
            Powerball
            from 1
            to 26 for the drawing.</li>
        <li>If the player's ball numbers does not match any of the winning numbers, the player does not win.</li>
        <li>Depending on the number of matches, the player may receive a prize.
        </li>
           
      </ul>
      <div class='flex-center'>
        <a href='/prizes'> <button>View Prizes!</button></a>
      </div>
  </section>




    
 @if ($play)
   <section class='border'>
        <form method='POST' action='/submitted'>
            <h2>Select Your Numbers</h2>
            <h4>Choose 5</h4>
            <div class='container'>
                <span class='select-number'>
                    <input class="checkboxes" type='checkbox' name='player-numbers[]' value='1'>
                    <label for='1'>1</label>
                </span>
                <span class='select-number'>
                    <input class="checkboxes" type='checkbox' name='player-numbers[]' value='2'>
                    <label for='2'>2</label>
                </span>
                <span class='select-number'>
                    <input class="checkboxes" type='checkbox' name='player-numbers[]' value='3'>
                    <label for='3'>3</label>
                </span>
                <span class='select-number'>
                    <input class="checkboxes" type='checkbox' name='player-numbers[]' value='4'>
                    <label for='4'>4</label>
                </span>
                <span class='select-number'>
                    <input class="checkboxes" type='checkbox' name='player-numbers[]' value='5'>
                    <label for='5'>5</label>
                </span>
                <span class='select-number'>
                    <input class="checkboxes" type='checkbox' name='player-numbers[]' value='6'>
                    <label for='6'>6</label>
                </span>
                <span class='select-number'>
                    <input class="checkboxes" type='checkbox' name='player-numbers[]' value='7'>
                    <label for='7'>7</label>
                </span>
                <span class='select-number'>
                    <input class="checkboxes" type='checkbox' name='player-numbers[]' value='8'>
                    <label for='8'>8</label>
                </span>
                <span class='select-number'>
                    <input class="checkboxes" type='checkbox' name='player-numbers[]' value='9'>
                    <label for='9'>9</label>
                </span>
                <span class='select-number'>
                    <input class="checkboxes" type='checkbox' name='player-numbers[]' value='10'>
                    <label for='10'>10</label>
                </span>
                <span class='select-number'>
                    <input class="checkboxes" type='checkbox' name='player-numbers[]' value='11'>
                    <label for='11'>11</label>
                </span>
                <span class='select-number'>
                    <input class="checkboxes" type='checkbox' name='player-numbers[]' value='12'>
                    <label for='12'>12</label>
                </span>
                <span class='select-number'>
                    <input class="checkboxes" type='checkbox' name='player-numbers[]' value='13'>
                    <label for='13'>13</label>
                </span>
                <span class='select-number'>
                    <input class="checkboxes" type='checkbox' name='player-numbers[]' value='14'>
                    <label for='14'>14</label>
                </span>
                <span class='select-number'>
                    <input class="checkboxes" type='checkbox' name='player-numbers[]' value='15'>
                    <label for='15'>15</label>
                </span>
                <span class='select-number'>
                    <input class="checkboxes" type='checkbox' name='player-numbers[]' value='16'>
                    <label for='16'>16</label>
                </span>
                <span class='select-number'>
                    <input class="checkboxes" type='checkbox' name='player-numbers[]' value='17'>
                    <label for='17'>17</label>
                </span>
                <span class='select-number'>
                    <input class="checkboxes" type='checkbox' name='player-numbers[]' value='18'>
                    <label for='18'>18</label>
                </span>
                <span class='select-number'>
                    <input class="checkboxes" type='checkbox' name='player-numbers[]' value='19'>
                    <label for='19'>19</label>
                </span>
                <span class='select-number'>
                    <input class="checkboxes" type='checkbox' name='player-numbers[]' value='20'>
                    <label for='20'>20</label>
                </span>
                <span class='select-number'>
                    <input class="checkboxes" type='checkbox' name='player-numbers[]' value='21'>
                    <label for='21'>21</label>
                </span>
                <span class='select-number'>
                    <input class="checkboxes" type='checkbox' name='player-numbers[]' value='22'>
                    <label for='22'>22</label>
                </span>
                <span class='select-number'>
                    <input class="checkboxes" type='checkbox' name='player-numbers[]' value='23'>
                    <label for='23'>23</label>
                </span>
                <span class='select-number'>
                    <input class="checkboxes" type='checkbox' name='player-numbers[]' value='24'>
                    <label for='24'>24</label>
                </span>
                <span class='select-number'>
                    <input class="checkboxes" type='checkbox' name='player-numbers[]' value='25'>
                    <label for='25'>25</label>
                </span>
                <span class='select-number'>
                    <input class="checkboxes" type='checkbox' name='player-numbers[]' value='26'>
                    <label for='26'>26</label>
                </span>
                <span class='select-number'>
                    <input class="checkboxes" type='checkbox' name='player-numbers[]' value='27'>
                    <label for='27'>27</label>
                </span>
                <span class='select-number'>
                    <input class="checkboxes" type='checkbox' name='player-numbers[]' value='28'>
                    <label for='28'>28</label>
                </span>
                <span class='select-number'>
                    <input class="checkboxes" type='checkbox' name='player-numbers[]' value='29'>
                    <label for='29'>29</label>
                </span>
                <span class='select-number'>
                    <input class="checkboxes" type='checkbox' name='player-numbers[]' value='30'>
                    <label for='30'>30</label>
                </span>
                <span class='select-number'>
                    <input class="checkboxes" type='checkbox' name='player-numbers[]' value='31'>
                    <label for='31'>31</label>
                </span>
                <span class='select-number'>
                    <input class="checkboxes" type='checkbox' name='player-numbers[]' value='32'>
                    <label for='32'>32</label>
                </span>
                <span class='select-number'>
                    <input class="checkboxes" type='checkbox' name='player-numbers[]' value='33'>
                    <label for='33'>33</label>
                </span>
                <span class='select-number'>
                    <input class="checkboxes" type='checkbox' name='player-numbers[]' value='34'>
                    <label for='34'>34</label>
                </span>
                <span class='select-number'>
                    <input class="checkboxes" type='checkbox' name='player-numbers[]' value='35'>
                    <label for='35'>35</label>
                </span>
                <span class='select-number'>
                    <input class="checkboxes" type='checkbox' name='player-numbers[]' value='36'>
                    <label for='36'>36</label>
                </span>
                <span class='select-number'>
                    <input class="checkboxes" type='checkbox' name='player-numbers[]' value='37'>
                    <label for='37'>37</label>
                </span>
                <span class='select-number'>
                    <input class="checkboxes" type='checkbox' name='player-numbers[]' value='38'>
                    <label for='38'>38</label>
                </span>
                <span class='select-number'>
                    <input class="checkboxes" type='checkbox' name='player-numbers[]' value='39'>
                    <label for='39'>39</label>
                </span>
                <span class='select-number'>
                    <input class="checkboxes" type='checkbox' name='player-numbers[]' value='40'>
                    <label for='40'>40</label>
                </span>
                <span class='select-number'>
                    <input class="checkboxes" type='checkbox' name='player-numbers[]' value='41'>
                    <label for='41'>41</label>
                </span>
                <span class='select-number'>
                    <input class="checkboxes" type='checkbox' name='player-numbers[]' value='42'>
                    <label for='42'>42</label>
                </span>
                <span class='select-number'>
                    <input class="checkboxes" type='checkbox' name='player-numbers[]' value='43'>
                    <label for='43'>43</label>
                </span>
                <span class='select-number'>
                    <input class="checkboxes" type='checkbox' name='player-numbers[]' value='44'>
                    <label for='44'>44</label>
                </span>
                <span class='select-number'>
                    <input class="checkboxes" type='checkbox' name='player-numbers[]' value='45'>
                    <label for='45'>45</label>
                </span>
                <span class='select-number'>
                    <input class="checkboxes" type='checkbox' name='player-numbers[]' value='46'>
                    <label for='46'>46</label>
                </span>
                <span class='select-number'>
                    <input class="checkboxes" type='checkbox' name='player-numbers[]' value='47'>
                    <label for='47'>47</label>
                </span>
                <span class='select-number'>
                    <input class="checkboxes" type='checkbox' name='player-numbers[]' value='48'>
                    <label for='48'>48</label>
                </span>
                <span class='select-number'>
                    <input class="checkboxes" type='checkbox' name='player-numbers[]' value='49'>
                    <label for='49'>49</label>
                </span>
                <span class='select-number'>
                    <input class="checkboxes" type='checkbox' name='player-numbers[]' value='50'>
                    <label for='50'>50</label>
                </span>
                <span class='select-number'>
                    <input class="checkboxes" type='checkbox' name='player-numbers[]' value='51'>
                    <label for='51'>51</label>
                </span>
                <span class='select-number'>
                    <input class="checkboxes" type='checkbox' name='player-numbers[]' value='52'>
                    <label for='52'>52</label>
                </span>
                <span class='select-number'>
                    <input class="checkboxes" type='checkbox' name='player-numbers[]' value='53'>
                    <label for='53'>53</label>
                </span>
                <span class='select-number'>
                    <input class="checkboxes" type='checkbox' name='player-numbers[]' value='54'>
                    <label for='54'>54</label>
                </span>
                <span class='select-number'>
                    <input class="checkboxes" type='checkbox' name='player-numbers[]' value='55'>
                    <label for='55'>55</label>
                </span>
                <span class='select-number'>
                    <input class="checkboxes" type='checkbox' name='player-numbers[]' value='56'>
                    <label for='56'>56</label>
                </span>
                <span class='select-number'>
                    <input class="checkboxes" type='checkbox' name='player-numbers[]' value='57'>
                    <label for='57'>57</label>
                </span>
                <span class='select-number'>
                    <input class="checkboxes" type='checkbox' name='player-numbers[]' value='58'>
                    <label for='58'>58</label>
                </span>
                <span class='select-number'>
                    <input class="checkboxes" type='checkbox' name='player-numbers[]' value='59'>
                    <label for='59'>59</label>
                </span>
                <span class='select-number'>
                    <input class="checkboxes" type='checkbox' name='player-numbers[]' value='60'>
                    <label for='60'>60</label>
                </span>
                <span class='select-number'>
                    <input class="checkboxes" type='checkbox' name='player-numbers[]' value='61'>
                    <label for='61'>61</label>
                </span>
                <span class='select-number'>
                    <input class="checkboxes" type='checkbox' name='player-numbers[]' value='62'>
                    <label for='62'>62</label>
                </span>
                <span class='select-number'>
                    <input class="checkboxes" type='checkbox' name='player-numbers[]' value='63'>
                    <label for='63'>63</label>
                </span>
                <span class='select-number'>
                    <input class="checkboxes" type='checkbox' name='player-numbers[]' value='64'>
                    <label for='64'>64</label>
                </span>
                <span class='select-number'>
                    <input class="checkboxes" type='checkbox' name='player-numbers[]' value='5'>
                    <label for='65'>65</label>
                </span>
                <span class='select-number'>
                    <input class="checkboxes" type='checkbox' name='player-numbers[]' value='66'>
                    <label for='66'>66</label>
                </span>
                <span class='select-number'>
                    <input class="checkboxes" type='checkbox' name='player-numbers[]' value='67'>
                    <label for='67'>67</label>
                </span>
                <span class='select-number'>
                    <input class="checkboxes" type='checkbox' name='player-numbers[]' value='68'>
                    <label for='68'>68</label>
                </span>
                <span class='select-number'>
                    <input class="checkboxes" type='checkbox' name='player-numbers[]' value='69'>
                    <label for='69'>69</label>
                </span>

            </div>
            <hr>
            <h2>Pick a Powerball Number</h2>
            <h4>Choose 1</h4>
            <div class='container'>
                <div class='col select-powerball'>
                    <input class='check-power' type='checkbox' name='player-powerball[]' value='1'>
                    <label for='1'>1</label>
                </div>
                <div class='col select-powerball'>
                    <input class='check-power' type='checkbox' name='player-powerball[]' value='2'>
                    <label for='2'>2</label>
                </div>
                <div class='col select-powerball'>
                    <input class='check-power' type='checkbox' name='player-powerball[]' value='3'>
                    <label for='3'>3</label>
                </div>
                <div class='col select-powerball'>
                    <input class='check-power' type='checkbox' name='player-powerball[]' value='4'>
                    <label for='4'>4</label>
                </div>
                <div class='col select-powerball'>
                    <input class='check-power' type='checkbox' name='player-powerball[]' value='5'>
                    <label for='5'>5</label>
                </div>
                <div class='col select-powerball'>
                    <input class='check-power' type='checkbox' name='player-powerball[]' value='6'>
                    <label for='6'>6</label>
                </div>
                <div class='col select-powerball'>
                    <input class='check-power' type='checkbox' name='player-powerball[]' value='7'>
                    <label for='7'>7</label>
                </div>
                <div class='col select-powerball'>
                    <input class='check-power' type='checkbox' name='player-powerball[]' value='8'>
                    <label for='8'>8</label>
                </div>
                <div class='col select-powerball'>
                    <input class='check-power' type='checkbox' name='player-powerball[]' value='9'>
                    <label for='9'>9</label>
                </div>
                <div class='col select-powerball'>
                    <input class='check-power' type='checkbox' nname='player-powerball[]' value='10'>
                    <label for='10'>10</label>
                </div>
                <div class='select-powerball'>
                    <input class='check-power' type='checkbox' name='player-powerball[]' value='11'>
                    <label for='11'>11</label>
                </div>
                <div class='select-powerball'>
                    <input class='check-power' type='checkbox' name='player-powerball[]' value='12'>
                    <label for='12'>12</label>
                </div>
                <div class='select-powerball'>
                    <input class='check-power' type='checkbox' name='player-powerball[]' value='13'>
                    <label for='13'>13</label>
                </div>
                <div class='select-powerball'>
                    <input class='check-power' type='checkbox' name='player-powerball[]' value='14'>
                    <label for='14'>14</label>
                </div>
                <div class='select-powerball'>
                    <input class='check-power' type='checkbox' name='player-powerball[]' value='15'>
                    <label for='15'>15</label>
                </div>
                <div class='select-powerball'>
                    <input class='check-power' type='checkbox' name='player-powerball[]' value='16'>
                    <label for='16'>16</label>
                </div>
                <div class='select-powerball'>
                    <input class='check-power' type='checkbox' name='player-powerball[]' value='17'>
                    <label for='17'>17</label>
                </div>
                <div class='select-powerball'>
                    <input class='check-power' type='checkbox' name='player-powerball[]' value='18'>
                    <label for='18'>18</label>
                </div>
                <div class='select-powerball'>
                    <input class='check-power' type='checkbox' name='player-powerball[]' value='19'>
                    <label for='19'>19</label>
                </div>
                <div class='select-powerball'>
                    <input class='check-power' type='checkbox' name='player-powerball[]' value='20'>
                    <label for='20'>20</label>
                </div>
                <div class='select-powerball'>
                    <input class='check-power' type='checkbox' name='player-powerball[]' value='21'>
                    <label for='21'>21</label>
                </div>
                <div class='select-powerball'>
                    <input class='check-power' type='checkbox' name='player-powerball[]' value='22'>
                    <label for='22'>22</label>
                </div>
                <div class='select-powerball'>
                    <input class='check-power' type='checkbox' name='player-powerball[]' value='23'>
                    <label for='23'>23</label>
                </div>
                <div class='select-powerball'>
                    <input class='check-power' type='checkbox' name='player-powerball[]' value='24'>
                    <label for='24'>24</label>
                </div>
                <div class='select-powerball'>
                    <input class='check-power' type='checkbox' name='player-powerball[]' value='25'>
                    <label for='25'>25</label>
                </div>
                <div class='select-powerball'>
                    <input class='check-power' type='checkbox' name='player-powerball[]' value='26'>
                    <label for='26'>26</label>
                </div>
            </div>
            <br>
            <div class='flex'>
                <button type='submit'>Submit</button>
            </div>
        </form>
    </section>
 @endif




  

@if ($gameSaved)
    <section class='border'>
        <h2>Estimated Jackpot: ${{ $total }}!</h2>

        <h2>Powerball Results:</h2>
        <div class='flex'>
            @foreach ($winning_numbers as $ball) 
                <span class='ball winning'>
                    {{$ball}}
                </span>
            @endforeach
            
            <span class='powerball winning'>
                {{$powerball}}
            </span>
        </div>
        <hr>
        <h2>Your Picks: </h2>
        <div class='flex'>
            @foreach ($player_numbers as $num) 
                <span class='ball'>
                {{$num}}
                </span>
            @endforeach
            <span class='powerball'>
                {{$player_powerball}}
            </span>
        </div>
        <br>


        
        <h2>Matches: 
            @if($matches_found === 'jackpot')
                Five Matches + Powerball <br> <br> <span class='jackpot'> YOU HAVE WON THE JACKPOT!</span>
            @else 
            {{ $matches_found}}
            @endif
        </h2>

        <div class='flex'>
            @foreach ($player_matches as $match)
            <span class='ball match'>
                {{$match}}
            </span>
            @endforeach

            @if($powerball_match)
                <span class='powerball match'>
                    {{$powerball}}
                </span>
            @endif
        </div>

    </section>

    <div class='flex'>
         <a href='/play'> <button>Play Again!</button></a>
    </div>
@endif



  
@if (!$play)
    <div class='flex-center'>
        <a href='/play'> <button>Play!</button></a>
    </div>
@endif
  
  
  <section>
    <h2>Winnings:</h2>
    @if (!$winnings)
        You haven't won anything yet!
    @elseif ($winnings) 
        {{ $winnings }}
    @endif

    @if (!$cost)
        You haven't played yet!
    @elseif($cost)
        {{ $cost }}
    @endif

  </section>


@endsection
