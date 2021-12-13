@extends('templates/master')

@section('title')
 P3 - Powerball
@endsection

@section('content')
  {{-- <h1><b>${{ $total }}</b></h1> --}}
  
  <h6><b>Estimated Jackpot</b></h6>
  <h1><b>$450 Million</b></h1>
  
  
  <div class='flex-center'>
    <a href='/results'> <button>View Results!</button></a>
  </div>
  
    
  <section class='instructions'>
  <h1>Project 3 - Powerball</h1>
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
    <section class='form'>
            <form method='POST' action='/submitted'>
                <h2>Select Your Numbers</h2>
                <h4>Choose 5</h4>
                <div class='container'>
                    @for ($i = 1; $i <= 69; $i++)
                        <span class='select-number'>
                            <input test='checkbox-numbers' class="checkboxes" type='checkbox' name='player-numbers[]' value={{$i}}>
                            <label for={{$i}}>{{$i}}</label>
                        </span>
                    @endfor
                </div>
                <hr>
                <h2>Pick a Powerball Number</h2>
                <h4>Choose 1</h4>
                <div class='container'>
                    @for ($i = 1; $i <= 26; $i++)
                        <span class='select-powerball'>
                            <input test='checkbox-powerball' class='checkpower' type='checkbox' name='player-powerball[]' value={{$i}}>
                            <label for={{$i}}>{{$i}}</label>
                        </span>
                    @endfor
                </div>
                <br>
                <div class='flex'>
                    <button test='button-submit' type='submit'>Submit</button>
                </div>
            </form>
        </section>
    @endif

    @if($app->errorsExist())
    <ul class='error alert alert-danger'>
        @foreach($app->errors() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
    @endif

    @if ($gameSaved)
        <section test='section-results'>
            <h2>Estimated Jackpot: ${{ $total }}!</h2>

            <h2>Powerball Results:</h2>
            <div test='drawing-results' class='flex results'>
                @foreach ($winning_numbers as $ball) 
                    <span test='ball-winner' class='ball winner'>
                        {{$ball}}
                    </span>
                @endforeach
                
                <span test='powerball-winner' class='powerball winner'>
                    {{$powerball}}
                </span>
            </div>
            <hr>
            <h2>Your Picks: </h2>
            <div test='player-numbers' class='flex'>
                @foreach ($player_numbers as $num) 
                    <span test='player-ball' class='ball'>
                    {{$num}}
                    </span>
                @endforeach
                <span test='player-powerball' class='powerball'>
                    {{$player_powerball}}
                </span>
            </div>
            <br>


            {{-- Fix this --}}
            <div test='matches-found' >
            <h2>Matches: 
                @if($matches_found === 'jackpot')
                    Five Matches + Powerball <br> <br> <span test='jackpot' class='jackpot'> YOU HAVE WON THE JACKPOT!</span>
                @elseif ($matches_found)
                {{ $matches_found }}
                @else
                No matches found!
                @endif
            </h2>

            <div test='matches' class='flex'>
                @foreach ($matches as $match)
                <span test='ball-match' class='ball match'>
                    {{$match}}
                </span>
                @endforeach

                @if($powerball_match)
                    <span test='powerball-match' class='powerball match'>
                        {{$powerball}}
                    </span>
                @endif
            </div>
            </div>
        </section>
    @endif



  
    @if (!$play)
        <div class='flex-center'>
            <a href='/play'> <button class='play'>Play!</button></a>
        </div>
    @endif
    
  
    <section>
        <h2>Winnings:</h2>
        @if (!$winnings)
            You haven't won anything yet!
        @elseif ($winnings) 
            ${{ $winnings }}
        @endif

        @if (!$cost)
            You haven't played yet!
        @elseif($cost)
            {{ $cost }}
        @endif

    </section>


@endsection
