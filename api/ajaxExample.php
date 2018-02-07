<?php

//http://www.w3schools.com/php/php_mysql_connect.asp


//This is a PHP object
$game = new stdClass();
$game->Title = "FInal Fantasy 7";
$game->Platform = "Playstation 1";
$game->Players = "2";
//echo json_encode($game);



$rest_json = file_get_contents("php://input"); //Workaround http://stackoverflow.com/questions/1282909/php-post-array-empty-upon-form-submission
$_POST = json_decode($rest_json, true);
//
//echo $_POST[0]["Title"];
//echo "<br>";
//echo $_POST[0]["Platform"];
$searchTerm = $_POST["searchTerm"];


//Lookup to your database for search term using Like.

//Return any results from the database to the page.


//Use javascript to generate the boxes on the interface using the returned information.
print_r($_POST);


//var_dump($_POST); //This will post all data related to this variable, you can use it for any php variable.