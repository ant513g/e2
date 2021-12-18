*Any instructions/notes in italics should be removed from the template before submitting* 

# Project 3
+ By: Ana Tolentino Cruz
+ URL: http://e2p3.anadesign.me/

## Graduate requirement
*x one of the following:*
+ [X] I have integrated testing into my application
+ [ ] I am taking this course for undergraduate credit and have opted out of integrating testing into my application

## Outside resources
*your list of outside resources go here*

## Notes for instructor
 I couldn't figure another validation to use because both forms are arrays
 ```
        # Ideally I would use required and numeric. 
        $this->app->validate([
            'player-numbers' => 'required ',
            'player-powerball' => 'required',
            ]);
 ```
        
And I wanted to try doing something like this, but it didn't work.

```
if(count($player_powerball) !== 1)  {
            $this->app->errorsExist();
        }
        if(count($player_numbers) !== 5)  {
            $this->app->errorsExist();
        }
```



## Codeception testing output
```
Acceptance Tests (3) -----------------------------------------------------------------------------------------------------------------------
P3Cest: Play game
Signature: P3Cest:playGame
Test: tests/acceptance/P3Cest.php:playGame
Scenario --
 I am on page "/"
 I am on page "/play"
 I check option "[test=checkbox-numbers]","[1,2,3,4,5]"
 I check option "[test=checkbox-powerball]","[1]"
 I click "[test=button-submit]"
 I see element "[test=section-results]"
 I see element "[test=drawing-results]"
 I see element "[test=ball-winner]"
 I grab text from "[test=ball-winner]"
 I see element "[test=powerball-winner]"
 I grab text from "[test=powerball-winner]"
 The Drawing Results379
 I see element "[test=player-numbers]"
 I see element "[test=player-ball]"
 I see element "[test=player-powerball]"
 I see element "[test=matches-found]"
 I grab text from "[test=matches-found]"
 The Outcome: Matches: No Match
 I see element "[test=matches]"
 I grab text from "[test=matches]"
 I see element "[test=winnings]"
 I grab text from "[test=winnings]"
 I see "Winnings: You haven't won anything yet!"
 PASSED 

P3Cest: Shows result
Signature: P3Cest:showsResult
Test: tests/acceptance/P3Cest.php:showsResult
Scenario --
 I am on page "/results"
 I click "[test=back-link]"
 I see "Results"
 PASSED 

P3Cest: Shows plays
Signature: P3Cest:showsPlays
Test: tests/acceptance/P3Cest.php:showsPlays
Scenario --
 I am on page "/results/plays?id=102/"
 I see element "[test=play-section]"
 I grab text from "[test=play-section]"
 I see "Play"
 I see element "[test=ball-winner]"
 I grab text from "[test=ball-winner]"
 I see element "[test=powerball-winner]"
 I grab text from "[test=powerball-winner]"
 The Drawing Results819
 PASSED 

--------------------------------------------------------------------------------------------------------------------------------------------


Time: 00:00.194, Memory: 12.00 MB

OK (3 tests, 16 assertions)
root@hes:/var/www/e2/p3# 
```
