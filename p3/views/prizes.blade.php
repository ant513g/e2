@extends('templates/master')

@section('title')
   Winning Prizes!
@endsection

@section('content')
    
<a href='/'> <button>&#8678; Back</button></a>
<section>
<li><b>Winning Prizes:</b> Depending on the number of matches, the player may receive a prize.
            <ul>
                <li>If the player matches all 5 white ball numbers and the Powerball to the winning numbers drawn,
                    the
                    player wins the Jackpot!(The player wins 68% of the total jackpot).</li>
                <li>If the player only matches the 5 white ball numbers to the winning numbers drawn, the player
                    wins
                    the
                    second prize of $1,000,000.</li>
                <li>If the player matches 4 white ball numbers and the Powerball, the player wins the third prize of
                    $50,000.</li>
                <li>If the player only matches 4 white ball numbers, the player wins the fourth prize of $100.</li>
                <li>If the player matches 3 white ball numbers and the Powerball, the player wins the fifth prize of
                    $100.</li>
                <li>If the player only matches 3 white ball numbers, the player wins the sixth prize of $7.</li>
                <li>If the player matches 2 white ball numbers and the Powerball, the player wins the seventh prize
                    of
                    $7.</li>
                <li>If the player matches 1 white ball number and the Powerball, the player wins the eighth prize of
                    $4.
                </li>
                <li>If the play only matches the Powerball, the player wins the ninth prize of $4.</li>
                <li><u>Note:</u> If the player matches 2 white ball numbers or 1 white ball number, the player does
                    not
                    win a prize. </li>
              </ul>
          </li>
        </section>
@endsection