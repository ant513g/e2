<?php

require 'Number.php';
require 'EvenNumber.php';
require 'Debug.php';

$example1 = new Number (9);
$example2 = new EvenNumber(20);

var_dump($example1->isValid());
var_dump($example2->isValid());


Debug::dump(['a','b',['x','y','z']]);