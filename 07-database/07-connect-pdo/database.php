<?php

//Database cred

$host = "localhost";
$port = 3306;
$dbName = "blog";
$username = "root";
$password = "demo";

$dsn = "mysql:host={$host};port={$port};dbname={$dbName};charset=utf8";

try {
    //create pdo instance

    $pdo = new PDO($dsn, $username, $password);

    //set podo to throw exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Database Connected ";
} catch (PDOException $e) {
    //echo the error if present
    echo "Connection failed " . $e->getMessage();
}
