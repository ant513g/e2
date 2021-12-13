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
        $I->seeElement('[test=powerball-winner]');
        $I->comment('The Drawing Results');
    

        $I->seeElement('[test=player-numbers');
        $I->seeElement('[test=player-ball');
        $I->seeElement('[test=player-powerball');

        $I->seeElement('[test=matches-found]');
        $matches_found = $I->grabTextFrom('[test=matches-found]');
        $I->comment('The Outcome: '. $matches_found);
    
        if($matches_found === 'jackpot' ) {
            $I->seeElement('[test=jackpot]');
        } 
        $I->seeElement('[test=matches]');
        $I->seeElement('[test=ball-match]');
        $I->seeElement('[test=powerball-match]');
    }
}