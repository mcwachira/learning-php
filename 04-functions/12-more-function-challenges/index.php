<?php
/*
  Challenge 1: Fahrenheit to Celsius
  Create a function called `fahrenheitToCelsius` that takes a Fahrenheit temperature as an argument. Return the temperature converted to Celsius.

  The formula to convert Fahrenheit to Celsius is: Celsius = (Fahrenheit - 32) * 5/9
*/

//easy
function fahrenheitToCelsius($fahrenheit)
{
    return $celcius = (($fahrenheit - 32) * 5) / 9;
}

// echo fahrenheitToCelsius(16);
echo "<br>";

//harder

$baseTemp = 32;
$fahrenheitToCelsius2 = function ($number) use (&$baseTemp) {
    return (($number - $baseTemp) * 5) / 9;
};

$fahrenheitToCelsius2(89);

echo $fahrenheitToCelsius2(89) . "<br/>";
echo $fahrenheitToCelsius2(89) . "<br/>";
echo "<br>";

/*
  Challenge 2: Print names in uppercase
  Create a function called `printNamesToUpperCase` that takes an array of names as an argument. The function should loop through the array and print each name to the screen in uppercase letters.
*/

$names = ["jane", "john", "janet", "joe"];

function printNamesToUpperCase($names)
{
    foreach ($names as $name) {
        $output = strtoUpper($name);

        echo $output . "<br/>";
    }
}
echo printNamesToUpperCase($names) . "<br/>";
echo "<br>";

/*
  Challenge 3: Find the longest word
  1. Create a function called `findLongestWord` that takes a sentence as an argument.
  2. The function should return the longest word in the sentence.
  3. The output should look like this:
*/

function findLongestWord($sentence)
{
    $strings = explode(" ", $sentence);

    $longestword = "";

    //first way

    // for ($i = 0; $i < count($strings); $i++) {
    //     if (
    //         strlen($strings[$i]) > strlen($longestword) ||
    //         $longestword === ""
    //     ) {
    //         $longestword = $strings[$i];
    //         // echo $longestword;
    //     }
    //     // print_r($strings[$i]);
    // }
    //
    //second way
    //

    foreach ($strings as $string) {
        if (strlen($string) > strlen($longestword) || $longestword === "") {
            $longestword = $string;
        }
    }

    return $longestword;
}

echo findLongestWord("The quickest brown fox jumped over the lazy dog");
