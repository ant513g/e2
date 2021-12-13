@extends('templates/master')

@section('title')
  Plays
@endsection

@section('content')
<a href='/results'> <button>&#8678; Back</button></a>
<h1>Play {{ $plays['id'] }}</h1>
    <section>
        <h2>Powerball Results:</h2>
            <div class='flex'>
                @foreach ($winning_numbers as $ball) 
                    <span class='ball winner'>
                        {{$ball}}
                    </span>
                @endforeach
                
                <span class='powerball winner'>
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
           
{{--    
 @foreach ($winning_numbers as $key)
                
                        {{ $index = array_search($key, $player_numbers)}} 
                        {{ $exists = array_key_exists($index,$player_numbers)}}
                       {{$exists}}
                        @if($index) 
                            <span class='ball match'>
                                {{$index}}
                            </span>
                        @endif
                     @endforeach --}}

                       

            <div class='flex'>
             {{$matches = array_intersect($winning_numbers, $player_numbers)}}
               
                @foreach ($player_numbers as $num) 
                    @if(array_search($num, $matches))
                        <span class='ball match'>
                        {{$num}}
                        </span>
                    @else
                    <span class='ball'>
                        {{$num}}
                        </span>
                    @endif
                @endforeach
                <span class='powerball'>
                    {{$player_powerball}}
                </span>
            </div>


{{-- For each number, return, if number value == match, then highlight key --}}
        {{-- <div class='flex'>
        {{$matches = array_intersect($winning_numbers, $player_numbers)}}
                @foreach ($player_numbers as $num)
             
                
                  <span class='ball'>
                    {{$num}}
                    </span>
           
                    
                    <span class='ball'>
                    {{$num}}
                    </span>
                @endforeach


                <span class='powerball'>
                    {{$player_powerball}}
                </span>
            </div>
 --}}

       



     <section>
        <h2>Matches:</h2>
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
        
        
        <h2>Winnings:</h2>

        
        <h5>
        {{$plays['winnings'] ? '$'.number_format($plays['winnings'], 0) : 'Sorry, no prize was won!'}}
        </h5>
    </section>
            
            
            
        </section>
   



   
@endsection
