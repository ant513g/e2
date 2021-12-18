<?php

class P3Cest
{
    public function playGame(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->amOnPage('/play');
       
        $I->checkOption('[test=checkbox-numbers]', '[1,2,3,4,5]');
        $I->checkOption('[test=checkbox-powerball]','[1]');
        $I->click('[test=button-submit]');
        
        $I->seeElement('[test=section-results]');

        $I->seeElement('[test=drawing-results]');

        $I->seeElement('[test=ball-winner]');
        $draw = $I->grabTextFrom('[test=ball-winner]');
        $I->seeElement('[test=powerball-winner]');
        $powerball = $I->grabTextFrom('[test=powerball-winner]');
        $I->comment('The Drawing Results'.$draw.$powerball);

       
        $I->seeElement('[test=player-numbers]');
        $I->seeElement('[test=player-ball]');
        $I->seeElement('[test=player-powerball]');

        $I->seeElement('[test=matches-found]');
        $matches_found = $I->grabTextFrom('[test=matches-found]');
        $I->comment('The Outcome: '. $matches_found);
    
        if($matches_found === 'jackpot' ) {
            $I->seeElement('[test=jackpot]');
        } 

        $I->seeElement('[test=matches]');
        $matches = $I->grabTextFrom('[test=matches]');

        
        if($matches) {
            $I->seeElement('[test=ball-match]');
            $ball_match = $I->grabTextFrom('[test=ball-match]');
            
            $I->seeElement('[test=powerball-match]');
            $powerball_match = $I->grabTextFrom('[test=powerball-match]');
            $I->comment('Match numbers '. $matches);
        } 

        $I->seeElement('[test=winnings]');
        $winnings= $I->grabTextFrom('[test=winnings]');

        if($winnings) {
            $I->see($winnings);

        } else {
            $I->see("You haven't won anything yet!");
        }
        
    }
    
    public function showsResult(AcceptanceTester $I)
    {
        $I->amOnPage('/results');
        
        $I->click('[test=back-link]');

        $I->see('Results');

        // $resultsCount = count($I->grabMultiple('result-link'));
        // $I->assertGreaterThanOrEqual(10, $resultsCount);

        // $I->seeElement('[test=results]');
        
        // $I->seeElement('[test=playerid]');
        // $timestamp = $I->grabTextFrom('[test=player-id]');
        
        // $I->seeElement('[test=ball]');
        // $I->seeElement('[test=powerball]');

    }
    public function showsPlays(AcceptanceTester $I)
    {
        $I->amOnPage('/results/plays?id=102/');

       
        $I->seeElement('[test=play-section]');
        $I->grabTextFrom('[test=play-section]');
        $I->see('Play');

        $I->seeElement('[test=ball-winner]');
        $draw = $I->grabTextFrom('[test=ball-winner]');
        $I->seeElement('[test=powerball-winner]');
        $powerball = $I->grabTextFrom('[test=powerball-winner]');
        $I->comment('The Drawing Results'.$draw.$powerball);
     
        
        // $resultsCount = count($I->grabMultiple('result-link'));
        // $I->assertGreaterThanOrEqual(10, $resultsCount);

        // $I->seeElement('[test=results]');
        
        // $I->seeElement('[test=playerid]');
        // $timestamp = $I->grabTextFrom('[test=player-id]');
        
        // $I->seeElement('[test=ball]');
        // $I->seeElement('[test=powerball]');

    }
}