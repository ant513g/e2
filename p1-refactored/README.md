# Project 1 - PowerBall
+ By: Ana Tolentino Cruz
+ URL: <http://e2p1.anadesign.me>

## Game planning
* Randomly select five numbers from 1 to 69 for the white balls for the numbers to be drawn then select one number from 1 to 26 for the red. Create a variable for each one. 
* Do the same as above, but for the player's numbers.
* Check to see if the player's powerball matches the drawn powerball. If the powerball matches, create a variable to output.
* Then check to see if any of the player's white ball numbers match any of the number's drawn. 
* If any of the white ball matches, check to see how many of the white ball matches. Push the matches to create an array.
* Depending on the length of the array (amount of white ball matches) output the number of matches. If there is a powerball match, output the powerball match.
* If the player has enough matches, then compare to see if the player wins a prize. If the player wins a prize, output the amount.
* If the player does not, the player does not win anything and the cost to play was $2.

## Outside resources
[PHP](https://www.php.net/)

[PHP Reference, W3Schools](https://www.w3schools.com/php/php_ref_overview.asp)

[Lottery - Powerball Odds and Prizes](https://edit.nylottery.ny.gov/sites/default/files/2020-03/Powerball_Odds_and_Prizes_0.pdf)


## Notes for instructor
Originally I was going to do conditionals to see if the balls matched  
```php 
($ball1 == $player_ball1) || ($ball1 == $player_ball2) || ($ball1 == $player_ball3)
```
 But this ended up being too long and complicated because each ball number drawn had to be compared to all of the player's numbers. Instead I opted to create an array of the matches, then search the array to see if any of the number matches. This made more sense because the positioning of the number doesn't have to be identical to the numbers drawn. 
Originally I was going to do conditionals to see if the balls matched 
```php 
($ball1 == $player_ball1) || ($ball1 == $player_ball2) || ($ball1 == $player_ball3)
```
But this ended up being too long and complicated because each ball number drawn had to be compared to all of the player's numbers. Instead I opted to create an array of the matches, then search the array to see if any of the number matches. This made more sense because the positioning of the number doesn't have to be identical to the numbers drawn. 

**Ex:**
* Drawn Number: Ball 2 = 34, Ball 3 = 65.
* Player Number: Ball 3 = 34, Ball 5 = 65.

