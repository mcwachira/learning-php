<?php
function add($a = 56, $b = 78)
{
    return $a + $b;
}

$answer = add(2, 3);
echo $answer;
echo "<br>";
$answer = add();
echo $answer;

function addAll(...$numbers)
{
    $totals = 0;
    foreach ($numbers as $number) {
        $totals += $number;
    }
    return $totals;
}

echo addAll(1, 2, 3, 4, 5);
