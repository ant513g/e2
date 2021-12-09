<?php
namespace App\Controllers;

class AppController extends Controller
{
    /**
     * This method is triggered by the route "/"
     */
    public function index()
    {
        // $error_message = '';
        // $error = true;
        $cost = '';
        $matches = 1;
        $winnings =  null;
        dump($cost);
        
        // $player_numbers = $_POST['player-numbers'] ?? '';
        // $player_powerball = $_POST['player-powerball'] ?? '';   

        // if(isset($_SESSION['results'])) {
        //     $results = $_SESSION['results'];
        //     $matches_found = $results['matches-found'];
        //     $winnings = $results['winnings'];
        //     $error = $results['error'];
        //     $cost = $results['cost'];
          
        //     $_SESSION['results'] = null;
            
        // } else {
            
        //     $_SESSION['results'] = null;
        // }
        

       

        $player_numbers = $this->app->input('player-numbers[]');
        $player_powerball = $this->app->input('player-powerball');
        dump($player_numbers);

         # Player's Selected Numbers
        // $player_ball1 = (int)$player_numbers[0];
        // $player_ball2 = (int)$player_numbers[1];
        // $player_ball3 = (int)$player_numbers[2];
        // $player_ball4 = (int)$player_numbers[3];
        // $player_ball5 = (int)$player_numbers[4];
        // $player_powerball = (int)$player_powerball[0];


        $player_ball1 = 1;
        $player_ball2 = 2;
        $player_ball3 = 3;
        $player_ball4 = 4;
        $player_ball5 = 5;
        $player_powerball = 1;
   
        # Drawn Balls
        $ball1 = rand(1,65);
        $ball2 = rand($ball1+1, 66); #  Min must be greater than the previous ball, Max must leave space for all the balls
        $ball3 = rand($ball2+1, 67);
        $ball4 = rand($ball3+1, 68);
        $ball5 = rand($ball4+1, 69); 
        $powerball = rand(1,26);


        # Array of computer Number Drawn
        $winning_numbers = [$ball1, $ball2, $ball3, $ball4, $ball5];
        dump($winning_numbers);

        # Player Numbers
        
        $player_numbers = [$player_ball1, $player_ball2, $player_ball3, $player_ball4, $player_ball5];
        dump($player_numbers);
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


        $cost = 2;
        # Prizes
        $total = number_format(450000000);

        # Match 5 + PB
        $jackpot= number_format(306000000);

        # Match 5
        $second_prize = number_format(1000000);

        # Match 4 + PB
        $third_prize = number_format(50000);
    
        # Match 4
        $fourth_prize = 100;

        # Match 3 + PB
        $fifth_prize = 100;

        # Match 3
        $sixth_prize = 7;

        # Match 2 + PB
        $seventh_prize = 7;

        # Match 1 + PB
        $eighth_prize = 4;

        # Match 0 + PB
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

  
        
        $welcomes = ['Welcome', 'Aloha', 'Welkom', 'Bienvenidos', 'Bienvenu', 'Welkomma'];
        dump($player_powerball);
        return $this->app->view('index', [
            'welcome' => $welcomes[array_rand($welcomes)],
            'player_numbers' => $this->app->input('player-numbers[]'),
            'cost' => $cost,
            'winnings' => $winnings,
            'matches' => $matches,
            'winning_numbers' => $winning_numbers,
            'ball1' => $ball1,
            'ball2' => $ball2,
            'ball3' => $ball3,
            'ball4' => $ball4,
            'ball5' => $ball5,

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
        $player_ball1 = $this->app->input('sku');
        $welcomes = ['Welcome', 'Aloha', 'Welkom', 'Bienvenidos', 'Bienvenu', 'Welkomma'];
        $this->app->redirect('/results', [
            'gameSaved' => true
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