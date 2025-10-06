<?php
$output = null;

$ids = [10, 22, 15, 45, 67];
$users = ['user1', 'user4', 'user2'];


//count
$output = count($ids);

//sort
sort($ids);
sort($users);


//rsort
rsort($ids);
rsort($users);

//push

array_push($ids, 100);
array_push($users, "user3");


//pop

array_pop($ids);
array_pop($users);


//shift

array_shift($ids);
array_shift($users);


//unshift

array_unshift($ids, 100);
array_unshift($users, "user3");

//slice
$ids2 = array_slice($ids, 2, 3);
var_dump($ids2);


//splice
$ids2 = array_splice($ids, 2, 2, 87);
var_dump($ids2);


//sum
$output = array_sum($ids);



//search
$output = array_search("user2", $users);

array_push($users, "user5");
//in_array 
$output = in_array("user5", $users);

//explode
$tags = 'tech,code,programming';
$tagsArr = explode(",", $tags);
var_dump($tagsArr)
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
            <h2 class="text-xl font-semi-bold">
                IDs Array :
            </h2>
            <p>
            <pre>
                    <?= print_r($ids) ?>
                </pre>
            </p>
            </p>

            <h2 class="text-xl font-semi-bold">
                Users Array :
            </h2>
            <p>
            <pre>
                    <?= print_r($users) ?>
                </pre>
            </p>
            </p>
        </div>
    </div>
</body>

</html>