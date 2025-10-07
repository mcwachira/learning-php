<?php

$name = "Alice";

function sayHello()
{
    global $name;
    //Local Scope
    //
    $name = "Bob";
    echo "Hello " . $name;
}

function sayGoodBye()
{
    $names = ["Jack", "Jill"];
    echo "Goodbye " . $names[0];
}
sayGoodBye();

echo "Goodbye " . $names[0];
