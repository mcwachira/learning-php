<?php
define("APP_NAME", "MY_APP");
define("APP_VERSION", "1.0.0");

echo APP_NAME;
echo APP_VERSION;

const DB_NAME = "mydb";
const DB_HOST = "localhost";

function run()
{
    echo APP_NAME;
    echo DB_NAME, DB_HOST;
}
run();

define("APP_NAME", "MY_APP2");
define("APP_VERSION", "1.0.2");
