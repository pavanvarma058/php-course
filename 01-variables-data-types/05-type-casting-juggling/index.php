<?php
$number1 = 5;
$number2 = 10;
$number3 = '20';
$fruit = "apple";
// Implicit Conversion
$result = $number1 + $number2;
$result = $number1 + $number3;
$result = $number3 + $number3;
//$result = $fruit + $number2; // error

var_dump($result);
echo "\n";


// Explicit Conersion
$result = (string) $number1;
$result = (int) $number3;
var_dump($result);

?>