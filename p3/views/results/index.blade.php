@extends('templates/master')

@section('title')
    Results
@endsection

@section('content')
<a test='back-link' href='/'> <button>&#8678; Back</button></a>
    <h2 test='result-heading'>Results</h2>

    @foreach ($plays as $play)
    <a href='/results/plays?id={{ $play['id'] }}' test='result-link' class='result-link'> 
        <section test='results' class='results-list'>
       
            <div test='playerid' class='playerid'>{{ $play['id'] }}</div>
            <h3> Winning Numbers</h3>
            <div>
                <span test='ball' class='ball winner'>
                    {{ $play['ball_1'] }}
                </span>
                 <span test='ball' class='ball winner'>
                    {{ $play['ball_2'] }}
                </span>
                 <span test='ball' class='ball winner'>
                    {{ $play['ball_3'] }}
                </span>
                 <span test='ball' class='ball winner'>
                    {{ $play['ball_4'] }}
                </span>
                 <span test='ball' class='ball winner'>
                    {{ $play['ball_5'] }}
                </span>
                 <span test='powerball' class='powerball winner'>
                    {{ $play['powerball'] }}
                </span>
                </div>
        </section>
    </a>
    @endforeach
@endsection
