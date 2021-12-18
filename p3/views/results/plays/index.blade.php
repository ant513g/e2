@extends('templates/master')

@section('title')
  Plays
@endsection

@section('content')
<a test='back-link' href='/results'> <button>&#8678; Back</button></a>
<h1>Play {{ $plays['id'] }}</h1>
    <section test='play-section'>
        <h2>Powerball Results:</h2>
            <div class='flex'>
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
        <h2>Player's Picks: </h2>
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

     <section>
        <h2 test=ball-match>Matches:</h2>
        <h5>{{ $plays['matches'] }} {{$plays['powerball_match'] ? '+ Powerball' : ''}}</h5>
         <div class='flex'>
                @foreach ($matches as $match)
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
        <section>
        <h2>Winnings:</h2>

        
        <h5>
        {{$plays['winnings'] ? '$'.number_format($plays['winnings'], 0) : 'Sorry, no prize was won!'}}
        </h5>
   </section>
            
            
            
        </section>
   



   
@endsection
