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



$rand_words = array_rand($words, 1);



$shuffled = str_shuffle($rand_words);

var_dump($rand_words);

if (array_key_exists($rand_words, $words)) {
    $value = current($rand_words);
}




if(isset($_SESSION['results'])) {
    $results = $_SESSION['results'];

    $haveAnswer = $results['haveAnswer'];
    $correct = $results['correct'];
    
    $_SESSION['results'] = null;
}


require 'index-view.php';