<?php

class MyGame extends Game
{
    protected $moves = ['heads', 'tails'];

    protected function determineOutcome($playerMove, $computerMove)
    {
        if ($computerMove == $playerMove) {
            return 'tie';
        } elseif ($playerMove == 'tails' and $computerMove == 'heads' or $playerMove == 'paper' and $computerMove == 'rock' or $playerMove == 'scissors' and $computerMove == 'paper') {
            return 'won';
        } else {
            return 'lost';
        }
    }
}
    