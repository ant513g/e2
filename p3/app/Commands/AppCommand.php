<?php

namespace App\Commands;
use Faker\Factory;

class AppCommand extends Command
{
    public function fresh() {
        $this->migrate();
        $this->seed();
    }
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
            'matches' => 'tinyint(6)',
            'powerball_match' => 'tinyint(1)',
            'winnings' => 'decimal(10,0)',
        ]);  
        dump('Migrations complete');
    }
    public function seed() 
    {
        $faker = Factory::create();

        for($i = 10; $i > 0; $i--) {
            $this->app->db()->insert('plays', [
                'timestamp' => $faker->dateTimeBetween('-'.$i. 'days', '-'.$i. 'days')->format('Y-m-d H:i:s'),
                'ball_1' => rand(1,65),
                'ball_2' => rand(1,66),
                'ball_3' => rand(1,67),
                'ball_4' => rand(1,68),
                'ball_5' => rand(1,69),
                'powerball' => rand(1,26),
                'player_ball_1' => rand(1,65),
                'player_ball_2' => rand(1,66),
                'player_ball_3' => rand(1,67),
                'player_ball_4' => rand(1,68),
                'player_ball_5' => rand(1,69),
                'player_powerball' => rand(1,26),
                'matches' => rand(0,5),
                'powerball_match' => rand(0,1),
                'winnings' => rand(1,500000000),
            ]);
        }
        dump('Seeds complete');
    }
}