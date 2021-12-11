<?php

namespace App\Commands;

class AppCommand extends Command
{
    
    public function migrate() 
    {
    
         
        $this->app->db()->createTable('plays', [
            'timestamp' => 'timestamp',
            'ball_1' => 'tinyint(2)',
            'ball_2' => 'tinyint(2)',
            'ball_3' => 'tinyint(2)',
            'ball_4' => 'tinyint(2)',
            'ball_5' => 'tinyint(2)',
            'powerball' => 'tinyint(2)',
            'player_ball_1' => 'tinyint(2)',
            'player_ball_2' => 'tinyint(2)',
            'player_ball_3' => 'tinyint(2)',
            'player_ball_4' => 'tinyint(2)',
            'player_ball_5' => 'tinyint(2)',
            'player_powerball' => 'tinyint(2)',
            'matches' => 'tinyint(5)',
            'powerball_match' => 'tinyint(1)',
            'winnings' => 'decimal(10,2)',
        ]);  
    }
}