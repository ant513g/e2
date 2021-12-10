<?php
namespace App\Controllers;

class AppController extends Controller
{
    /**
     * This method is triggered by the route "/"
     */
    public function index()
    {
        $gameSaved = $this->app->old('gameSaved');
        $play = $this->app->old('play');
        $cost = '';

        
        
        $winnings = $this->app->old('winnings');
        $player_numbers = $this->app->old('player_numbers');
        $player_powerball = $this->app->old('player_powerball');
        $winning_numbers = $this->app->old('winning_numbers');
        $powerball = $this->app->old('powerball');
        $player_matches = $this->app->old('player_matches');
        $powerball_match = $this->app->old('powerball_match');
        $matches_found = $this->app->old('matches_found');

        $matches = 1;

        $total = number_format(450000000);
        $jackpot= number_format(306000000);
        $second_prize = number_format(1000000);
        $third_prize = number_format(50000);
        $fourth_prize = 100;
        $fifth_prize = 100;
        $sixth_prize = 7;
        $seventh_prize = 7;
        $eighth_prize = 4;
        $ninth_prize = 4;
       
        return $this->app->view('index', [
            'gameSaved' => $gameSaved,
            'play' => $play,
            'cost' => $cost,
            'winnings' => $winnings,
            'total' => $total,
            'submitted' => false,
            'player_numbers' => $player_numbers,
            'player_powerball' => $player_powerball,
            'winning_numbers' => $winning_numbers,
            'powerball' => $powerball,
            'player_matches' => $player_matches,
            'powerball_match' => $powerball_match,
            'matches_found' =>  $matches_found,
        ]);
    }

    public function prizes()
    {
        $gameSaved = $this->app->old('gameSaved');
        
        return $this->app->view('/prizes', [
            'gameSaved' => $gameSaved,
        ]);
    }

    public function submitted()
    {
        $player_numbers = $this->app->input('player-numbers');
        $player_powerball = $this->app->input('player-powerball');

         # Player's Selected Numbers
        $player_ball1 = (int)$player_numbers[0];
        $player_ball2 = (int)$player_numbers[1];
        $player_ball3 = (int)$player_numbers[2];
        $player_ball4 = (int)$player_numbers[3];
        $player_ball5 = (int)$player_numbers[4];
        $player_powerball = (int)$player_powerball[0];

        # Drawn Balls
        // $ball1 = rand(1,65);
        // $ball2 = rand($ball1+1, 66); #  Min must be greater than the previous ball, Max must leave space for all the balls
        // $ball3 = rand($ball2+1, 67);
        // $ball4 = rand($ball3+1, 68);
        // $ball5 = rand($ball4+1, 69); 
        // $powerball = rand(1,26);
        $ball1 = rand(1,2);
        $ball2 = rand($ball1+1, 3); #  Min must be greater than the previous ball, Max must leave space for all the balls
        $ball3 = rand($ball2+1, 4);
        $ball4 = rand($ball3+1, 5);
        $ball5 = rand($ball4+1, 5); 
        $powerball = rand(1,2);

        # Array of computer Number Drawn
        $winning_numbers = [$ball1, $ball2, $ball3, $ball4, $ball5];
        
        # Player Numbers
        $player_numbers = [$player_ball1, $player_ball2, $player_ball3, $player_ball4, $player_ball5];
       
        # Array of the player numbers that matched the drawn balls
        $player_matches = [];

        $powerball_match = '';

        # Text to accompany output
        $matches_found = '';

        # Checks to see if there a match for powerball
        # if not, powerball_match is nothing
        $powerball_match = ($powerball === $player_powerball) ? $powerball : null;
        
        # These are all separate statements to see if any of the players numbers match any balls number drawn
        # If they do, they are pushed to the array
        if (in_array($player_ball1, $winning_numbers)) {
            $player_matches[] = $player_ball1;
        }
        if (in_array($player_ball2, $winning_numbers)) {
            $player_matches[] = $player_ball2;
        }
        if (in_array($player_ball3, $winning_numbers)) {
            $player_matches[] = $player_ball3;
        }
        if (in_array($player_ball4, $winning_numbers)) {
            $player_matches[] = $player_ball4;
        }
        if (in_array($player_ball5, $winning_numbers)) {
            $player_matches[] = $player_ball5;
        }

        # Prizes
        $total = number_format(450000000);
        $jackpot= number_format(306000000);
        $second_prize = number_format(1000000);
        $third_prize = number_format(50000);
        $fourth_prize = 100;
        $fifth_prize = 100;
        $sixth_prize = 7;
        $seventh_prize = 7;
        $eighth_prize = 4;
        $ninth_prize = 4;

        #   Figuring out Matches and Prize won
        #   First filter to see if Powerball matches, then if numbers match
        #   This will count the length of the array $player_matches.
        #   The length of the array determines the number of matches.
        if ($powerball === $player_powerball) {
            $correct = true;
            if (count($player_matches) == 0) {
                $matches_found = "No Match + Powerball";
                $winnings = "$" . $ninth_prize;
            } elseif (count($player_matches) == 1) {
                $matches_found = "One Match + Powerball";
                $winnings = "$" . $eighth_prize;
            } elseif (count($player_matches) == 2) {
                $matches_found = "Two Matches + Powerball";
                $winnings = "$" . $seventh_prize;
            } elseif (count($player_matches) == 3) {
                $matches_found = "Three Matches + Powerball";
                $winnings = "$" . $fifth_prize;
            } elseif (count($player_matches) == 4) {
                $matches_found = "Four Matches + Powerball";
                $winnings = "$" . $third_prize;
            } elseif (count($player_matches) == 5) {
                $matches_found = 'jackpot';
                $winnings = "JACKPOT $" . $jackpot;
            }
        } elseif (count($player_matches) == 0) {
            $matches_found = "No Match";
            $winnings = "None";
        } elseif (count($player_matches) == 1) {
            $matches_found = "One Match";
            $winnings = "None";
        } elseif (count($player_matches) == 2) {
            $matches_found = "Two Matches";
            $winnings = "None";
        } elseif (count($player_matches) == 3) {
            $matches_found = "Three Matches";
            $winnings = "$" . $sixth_prize;
        } elseif (count($player_matches) == 4) {
            $matches_found = "Four Matches";
            $winnings = "$" . $fourth_prize;
        } elseif (count($player_matches) == 5) {
            $matches_found = "Five Matches";
            $winnings = "$" . $second_prize;
        } else {
            $matches_found = "No Match";
            $winnings = "None";
        }

        // $this->app->validate([
        //     'player-numbers[]' => 'required',
        //     'player-powerball[]' => 'required',
        // ]);

        
        $this->app->redirect('/', [
            'gameSaved' => true,
            'winnings' => $winnings,
            'player_numbers' => $player_numbers,
            'player_powerball' => $player_powerball,
            'winning_numbers' => $winning_numbers,
            'powerball' => $powerball,
            'player_matches' => $player_matches,
            'powerball_match' => $powerball_match,
            'matches_found' =>  $matches_found,

        ]);
       
    }
    public function play()
    {
        $this->app->redirect('/', [
            'play' => true,
        ]);
    }
    public function winnings()
    {
        $welcomes = ['Welcome', 'Aloha', 'Welkom', 'Bienvenidos', 'Bienvenu', 'Welkomma'];
        
        return $this->app->view('winnings/index', [
            'welcome' => $welcomes[array_rand($welcomes)]
        ]);
    }
    public function results()
    {
        $welcomes = ['Welcome', 'Aloha', 'Welkom', 'Bienvenidos', 'Bienvenu', 'Welkomma'];
        
        return $this->app->view('results/index', [
            'welcome' => $welcomes[array_rand($welcomes)]
        ]);
    }
}