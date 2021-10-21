<?php

function vowelCount($word) {
    $mySplit = str_split($word);
    // var_dump($mySplit);
    // if(in_array("a", $mySplit)){
    //     $value = 1;
    //     return $value++;
    // } 
    // == ("a" || "e" || "i" || "o" || "u")) 
    foreach($mySplit as $value) {
        return $value;
        
    }
}

$example1 = vowelCount('apple'); # Should yield 2
$example2 = vowelCount('lynx'); # Should yield 0
$example3 = vowelCount('hi'); # Should yield 1
$example4 = vowelCount('mississippi'); # Should yield 4




var_dump($example1, $example2, $example3, $example4);
require('index-view.php');