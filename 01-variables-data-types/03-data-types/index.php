<?php

/*
  PHP DATA TYPES:

- String
- Integer
- Float
- Boolean
- Array
- Object
- NULL
- Resource
*/
$name = "yeswanth";
$name2 = "Pavan";

var_dump($name);

echo getType($name);
echo "\n";
echo getType($name2);
echo "\n";
// Integer
$age = 25;
var_dump($age);
echo "\n";

// Float
$rating = 4.5;
var_dump($rating);
echo "\n";

// Boolean
$isLoaded = true;
var_dump($isLoaded);
echo "\n";

// Array
$friends = ['alan', 'charlie', 'jake', 'walden'];
var_dump($friends);
echo "\n";

// Object
$person = new stdClass();
var_dump($person);
echo "\n";

// NULL
$car = null;
var_dump($car);
echo "\n";

// Resource
//$file = fopen('sample.txt', 'r');
//var_dump($file);
//echo "\n";