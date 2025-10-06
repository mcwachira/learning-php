<?php
$names = array("john", "Jack", "Jill");
$numbers = [1, 2, 3, 4, 5, 6];

// var_dump($names);
// var_dump($numbers);


//Add elements to arrays

$numbers[] = 100;
$numbers[] = 100;

unset($numbers[3]);

$numbers = array_values($numbers);

var_dump($numbers);
