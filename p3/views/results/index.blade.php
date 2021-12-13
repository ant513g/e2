@extends('templates/master')

@section('title')
    Results
@endsection

@section('content')
<a href='/'> <button>&#8678; Back</button></a>
    <h2>Results</h2>

    @foreach ($plays as $play)
    <a href='/results/plays?id={{ $play['id'] }}'> 
        <section>
            <div class='review-name'>{{ $play['id'] }}</div>
                <span class='ball winner'>
                    {{ $play['ball_1'] }}
                </span>
                 <span class='ball winner'>
                    {{ $play['ball_2'] }}
                </span>
                 <span class='ball winner'>
                    {{ $play['ball_3'] }}
                </span>
                 <span class='ball winner'>
                    {{ $play['ball_4'] }}
                </span>
                 <span class='ball winner'>
                    {{ $play['ball_5'] }}
                </span>
                 <span class='powerball winner'>
                    {{ $play['powerball'] }}
                </span>
            {{-- @foreach ($winning_numbers as $numbers) 
                <span class='ball winner'>
                    {{ $numbers }}
                </span>
            @endforeach --}}
        </section>
    </a>
    @endforeach
@endsection
