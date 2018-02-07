<?php
$servername = "localhost";
$username = "root";
$password = "root";

try {
    $serverdb = new PDO("mysql:host=$servername;dbname=WEBDB", $username, $password);
    // set the PDO error mode to exception
    $serverdb->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "CREATE DATABASE USERS";
    // use exec() because no results are returned
    $serverdb->exec($sql);
    echo "Database created successfully";
}
catch(PDOException $e)
{
    echo $sql . "Error messages" . $e->getMessage();
}

$conn = null;
?>
/**
* Created by PhpStorm.
* User: Joe
* Date: 11/02/2016
* Time: 18:50
*/