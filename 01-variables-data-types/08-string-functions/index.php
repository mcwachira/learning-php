<?php
$output = null;
$string  = 'hello world ';


//strlen
$output = strlen($string);


//str word count 
$output = str_word_count($string);


//str pos
$output = strpos($string, 'world');

//Get Specific char by index 
$output = $string[4];

//substr
$output = substr($string, 6, 5);

//str replace
$output = str_replace('world', 'Universe', $string);

//strUpper
$output = strtoUpper($string);

//strlower
$output = strtoLower($string);


//ucwords
$output = ucwords($string);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>PHP From Scratch</title>
</head>

<body class="bg-gray-100">
  <header class="bg-blue-500 text-white p-4">
    <div class="container mx-auto">
      <h1 class="text-3xl font-semibold">PHP From Scratch</h1>
    </div>
  </header>
  <div class="container mx-auto p-4 mt-4">
    <div class="bg-white rounded-lg shadow-md p-6 mt-6">
      <p class="text-xl"><?= $output ?></p>
    </div>
  </div>
</body>

</html>