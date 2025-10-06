<?php






$number1 = 0;
$number2 = 10;
$number3 = "20";
$fruit = 'apple';
$bool1 = true;
$bool2 = false;
$null = null;


//Implicit type casting
$result  = $number1 + $number2;
$result  = $number1 + $number3;
$result  = $number3 + $number3;
$result  = $number3 + $null;


//Explicit type casting 
$result = (int) $number3;
$result = (bool) $number1;
var_dump($result);
