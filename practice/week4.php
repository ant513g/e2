<?php

$moves = ['rock', 'paper', 'scissors']; // Array of strings

$strawLengths = [2,2,2,2,2,1];

$mixed = ['rock', 1, .04, true];

//echo $moves[0];
//var_dump($moves);

$randomNumber = rand(0,2);
//var_dump($randomNumber);

//      Arry,
$move = $moves[$randomNumber];

// var_dump($move);

$coin_values = [
    'penny' => .01, 
    'nickel' => .05, 
    'dime' => .10, 
    'quarter' => .25
];


$coin_counts = [
    'penny' => 100, 
    'nickel' => 25, 
    'dime' => 100, 
    'quarter' => 34
];

$coins = [
    'penny' => [
        'count' => 100, 
        'value' => .01
    ],
    'nickel' => [
        'count' => 25,
        'value' =>  .05
    ],
    'dime' => [
        'count' => 100,
        'value' => .10
    ],
    'quarter' => [
        'count' => 34,
        'value' => .25
    ],
    'halfDollar' => [
        'count' => 10,
        'value' => .50
    ]

];

//var_dump($coin_values['quarter']);

// asort($coin_counts);
// arsort($coin_counts);
// ksort($coin_counts);

// var_dump($coin_counts);






$total = 0;

// foreach($coin_counts as $coin => $count) {
//     $total = $total + ($count * $coin_values[$coin]);
// }

foreach($coins as $coin => $info) {
    $total = $total + ($info['count'] * $info['value']);
}


var_dump($total);

$cards = [1,2,3,4,5,6,7,8,9,10,11,12,13,14];
shuffle($cards);
$playerCards = array_splice($cards, 0, count($cards)/2);
$computerCards = $cards;
var_dump($playerCards);
// $playerDraw = $playerCards[count($playerCards) - 1];
$playerDraw = array_pop($playerCards);
// var_dump($playerCards);
// var_dump($playerDraw);
// var_dump(date('F j Y'));