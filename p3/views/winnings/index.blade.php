@extends('templates/master')

@section('title')
   My Winnings
@endsection

@section('content')
<a href='/'> <button>&#8678; Back</button></a>
    <h2>My Winnings</h2>
    
      <h2>Project 3 - Powerball</h2>
 <section>
        <h2> Winnings: <?php echo $winnings; ?></h2>
        <br>
        <h2>Game Cost: $<?php echo $cost;?></h2>
        <div class='flex'>
            <a href='/index.php'> <button>Play Again!</button></a>
        </div>
    </section>
   
@endsection
