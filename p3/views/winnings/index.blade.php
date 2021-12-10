@extends('templates/master')

@section('title')
   My Winnings
@endsection

@section('content')
<a href='/'> <button>&#8678; Back</button></a>
    <section>
        <h1>My Winnings</h1>
        
        @if (!$winnings)
            You haven't won anything yet!
        @elseif ($winnings) 
            {{ $winnings }}
        @endif

        <div class='flex'>
            <a href='../play'> <button>Play Again!</button></a>
        </div>
    </section>

   
@endsection
