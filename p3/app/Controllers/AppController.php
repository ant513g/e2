<?php
namespace App\Controllers;

class AppController extends Controller
{
    /**
     * This method is triggered by the route "/"
     */
    public function index()
    {   
        $play = $this->app->old('play');
        $cost = '';
        $gameSaved = $this->app->old('gameSaved');
        
        $winnings = $this->app->old('winnings');
        $player_numbers = $this->app->old('player_numbers');
        $player_powerball = $this->app->old('player_powerball');
        $winning_numbers = $this->app->old('winning_numbers');
        $powerball = $this->app->old('powerball');
        $matches = $this->app->old('matches');
        $powerball_match = $this->app->old('powerball_match');
        $matches_found = $this->app->old('matches_found');
        
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
            'play' => $play,
            'cost' => $cost,
            'total' => $total,
            'submitted' => false,
            'gameSaved' => $gameSaved,
            'winnings' => number_format($winnings, 0),
            'player_numbers' => $player_numbers,
            'player_powerball' => $player_powerball,
            'winning_numbers' => $winning_numbers,
            'powerball' => $powerball,
            'matches' => $matches,
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
       
        # I couldn't figure another validation to use because both forms are arrays
        # Ideally I would use required and numeric. 
        // $this->app->validate([
        //     'player-numbers' => 'required ',
        //     'player-powerball' => 'required',
        // ]);
        
        
        $player_numbers = $this->app->input('player-numbers');
        $player_powerball = $this->app->input('player-powerball');
        
        if(count($player_powerball) !== 1)  {
            $this->app->errorsExist();
        }
        if(count($player_numbers) !== 5)  {
            $this->app->errorsExist();
        }

         # Player's Selected Numbers
        $player_ball_1 = (int)$player_numbers[0];
        $player_ball_2 = (int)$player_numbers[1];
        $player_ball_3 = (int)$player_numbers[2];
        $player_ball_4 = (int)$player_numbers[3];
        $player_ball_5 = (int)$player_numbers[4];
        $player_powerball = (int)$player_powerball[0];

        # Drawn Balls
        $ball_1 = rand(1,65);
        $ball_2 = rand($ball_1+1, 66); #  Min must be greater than the previous ball, Max must leave space for all the balls
        $ball_3 = rand($ball_2+1, 67);
        $ball_4 = rand($ball_3+1, 68);
        $ball_5 = rand($ball_4+1, 69); 
        $powerball = rand(1,26);

        # Array of computer Number Drawn
        $winning_numbers = [$ball_1, $ball_2, $ball_3, $ball_4, $ball_5];
        
        # Player Numbers
        $player_numbers = [$player_ball_1, $player_ball_2, $player_ball_3, $player_ball_4, $player_ball_5];
    
        # Array of the player numbers that matched the drawn balls
        $matches = [];

        $powerball_match = '';

        # Text to accompany output
        $matches_found = '';

        # Checks to see if there a match for powerball
        # if not, powerball_match is nothing
        $powerball_match = ($powerball === $player_powerball) ? $powerball : null;
        
        #Originally I had if statements to compare the arrays, but then I found this function.
        $matches = array_intersect($winning_numbers, $player_numbers);

        # Prizes
        $total = 450000000;
        $jackpot= 306000000;
        $second_prize = 1000000;
        $third_prize = 50000;
        $fourth_prize = 100;
        $fifth_prize = 100;
        $sixth_prize = 7;
        $seventh_prize = 7;
        $eighth_prize = 4;
        $ninth_prize = 4;

        #   Figuring out Matches and Prize won
        #   First filter to see if Powerball matches, then if numbers match
        #   This will count the length of the array $matches.
        #   The length of the array determines the number of matches.
        if ($powerball === $player_powerball) {
            $correct = true;
            if (count($matches) == 0) {
                $matches_found = "No Match + Powerball";
                $winnings = $ninth_prize;
            } elseif (count($matches) == 1) {
                $matches_found = "One Match + Powerball";
                $winnings = $eighth_prize;
            } elseif (count($matches) == 2) {
                $matches_found = "Two Matches + Powerball";
                $winnings = $seventh_prize;
            } elseif (count($matches) == 3) {
                $matches_found = "Three Matches + Powerball";
                $winnings = $fifth_prize;
            } elseif (count($matches) == 4) {
                $matches_found = "Four Matches + Powerball";
                $winnings = $third_prize;
            } elseif (count($matches) == 5) {
                $matches_found = 'jackpot';
                $winnings = "JACKPOT $" . $jackpot;
            }
        } elseif (count($matches) == 0) {
            $matches_found = "No Match";
            $winnings = null;
        } elseif (count($matches) == 1) {
            $matches_found = "One Match";
            $winnings = null;
        } elseif (count($matches) == 2) {
            $matches_found = "Two Matches";
            $winnings = null;
        } elseif (count($matches) == 3) {
            $matches_found = "Three Matches";
            $winnings = $sixth_prize;
        } elseif (count($matches) == 4) {
            $matches_found = "Four Matches";
            $winnings = $fourth_prize;
        } elseif (count($matches) == 5) {
            $matches_found = "Five Matches";
            $winnings = $second_prize;
        } else {
            $matches_found = "No Match";
            $winnings = null;
        }

        $this->app->db()->insert('plays', [
            'timestamp' => date('Y-m-d H:i:s'),
            'ball_1' => $ball_1,
            'ball_2' => $ball_2,
            'ball_3' => $ball_3,
            'ball_4' => $ball_4,
            'ball_5' => $ball_5,
            'powerball' => $powerball,
            'player_ball_1' => $player_ball_1,
            'player_ball_2' => $player_ball_2,
            'player_ball_3' => $player_ball_3,
            'player_ball_4' => $player_ball_4,
            'player_ball_5' => $player_ball_5,
            'player_powerball' => $player_powerball,
            'matches' => count($matches),
            'powerball_match' => $powerball_match,
            'winnings' => $winnings,
        ]);

        $this->app->redirect('/', [
            'gameSaved' => true,
            'winnings' => $winnings,
            'player_numbers' => $player_numbers,
            'player_powerball' => $player_powerball,
            'winning_numbers' => $winning_numbers,
            'powerball' => $powerball,
            'matches' => $matches,
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
 
    public function results()
    {
        $plays = $this->app->db()->all('plays');
     
        return $this->app->view('results/index', [
            'plays' => $plays,
        ]);
    }
    public function plays()
    {
        $id = $this->app->param('id');
        $plays = $this->app->db()->findById('plays', $id);

        $player_ball_1 = $plays['player_ball_1'];
        $player_ball_2 = $plays['player_ball_2'];
        $player_ball_3 = $plays['player_ball_3'];
        $player_ball_4 = $plays['player_ball_4'];
        $player_ball_5 = $plays['player_ball_5'];
        $player_powerball = $plays['player_powerball'];

        $ball_1 = $plays['ball_1'];
        $ball_2 = $plays['ball_2'];
        $ball_3 = $plays['ball_3'];
        $ball_4 = $plays['ball_4'];
        $ball_5 = $plays['ball_5'];
        $powerball = $plays['powerball'];

        $winning_numbers = [$ball_1, $ball_2, $ball_3, $ball_4, $ball_5];

        $player_numbers = [$player_ball_1, $player_ball_2, $player_ball_3, $player_ball_4, $player_ball_5];
        
        foreach ($winning_numbers as $key) {
            $value = array_search($key, $player_numbers);
        }
        $matches = array_intersect($winning_numbers, $player_numbers);

        $powerball_match = '';

        $matches_found = '';

        # Checks to see if there a match for powerball
        # if not, powerball_match is nothing
        $powerball_match = ($powerball === $player_powerball) ? $powerball : null;

        return $this->app->view('results/plays/index', [
            'id' => $id,
            'plays' => $plays,
            'player_numbers' => $player_numbers,
            'player_powerball' => $player_powerball,
            'winning_numbers' => $winning_numbers,
            'powerball' => $powerball,
            'matches' => $matches,
            'powerball_match' => $powerball_match,
        ]);
    }
}