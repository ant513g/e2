@extends('templates/master')

@section('title')
    Results
@endsection

@section('content')
<a href='/'> <button>&#8678; Back</button></a>
    <h2>Results</h2>
    
     <section>
                    This is a practice block
                    Winning Numbers:
    </section>

     {{-- @foreach ($winning_numbers as $ball) 
                <span class='ball winning'>
                    {{$ball}}
                </span>
      @endforeach --}}
@endsection
