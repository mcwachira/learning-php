<?php

function sayHello()
{
    echo "Hello, World!";
}

function sayGoodbye()
{
    return "Goodbye, World!";
}

$goodbye = sayGoodbye();

echo $goodbye;
