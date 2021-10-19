<?php

session_start();

$words = [
    'evidence' => 'A discovery that helps solve a crime',
    'ponder' => 'To think carefully about something',
    'locate' => 'Discover the exact place or position of something or someon
e',
    'abridge' => 'to shorten by leaving out some parts',
    'regulate' => 'to make rules or laws that control something',
    'modest' => 'not overly proud or confident',
    'impromptu' => 'not prepared ahead of time',
    'stint' => 'a period of time spent at a particular activity',
    'tranquil' => 'free from disturbance or turmoil',
    'mutiny' => 'a turning of a group against a person in charge'
];


$useNewWord = true;
$lastWord = '';


if(isset($_SESSION['results'])) {

    #Extract data
    $results = $_SESSION['results'];
    $haveAnswer = $results['haveAnswer'];
    $correct = $results['correct'];
    $lastWord = $_SESSION['word'];

    #If correct, will be true.
    $useNewWord = $correct;
    
    #Clear results, refrest
    $_SESSION['results'] = null;
}

if($useNewWord) {
    #Prevents the using the same word as the last one
    while(!isset($word) or $word == $lastWord) {
        $word = array_rand($words);
    }
} else {
    $word = $lastWord;
}

#Update text
$_SESSION['word'] = $word;

# Extract hint, and scramble

$hint = $words[$word];
$shuffled = str_shuffle($word);


require 'index-view.php';