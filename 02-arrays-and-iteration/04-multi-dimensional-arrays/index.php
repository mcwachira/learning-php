<?php
$output = null;

$fruits = [
  ['Apple', 'Red'],
  ['Orange', 'Orange'],
  ['Banana', 'yellow'],
];


$users = [
  [
    'name' => 'John',
    'email' => 'john@gmail.com',
    'password' => '12345678',
    'hobbies' => ['Tennis', 'video Games']
  ],
  [
    'name' => 'James',
    'email' => 'james@gmail.com',
    'password' => '12345678',
    'hobbies' => ['Tennis', 'video Games'],
  ],
  [
    'name' => 'Jane',
    'email' => 'jane@gmail.com',
    'password' => '12345678',
    'hobbies' => ['Tennis', 'video Games']
  ]
];


$output = $users[0]['hobbies'][1];
$fruits[] = ['Grape', 'Purple']
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
      <!-- Output -->
      <p class="text-xl"><?= $output ?></p>
    </div>

    <h2 class="text-xle font-semibold my-4">
      Fruit Array:
    </h2>
    <p>
    <pre>
                    <?php print_r($users) ?>
                </pre>
    </p>
  </div>
</body>

</html>