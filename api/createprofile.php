<?php
/*
A simple RESTful API router.
*/

include __DIR__ . '/config.php';
$verb = $_SERVER['REQUEST_METHOD']; // tells you waht request method someone is using eg get post put delete

//if we have a get post, get the id from the database.

if($verb == "GET"){
    if(isset($_GET['userId'])){ //If user ID exists, return single user
        $userId = $_GET['userId'];
        $statement = $conn->prepare("select * from users where userID = :userID");
        $statement->execute(array(':userID' => $userId));
        $row = $statement->fetch(PDO::FETCH_ASSOC);
        // use exec() because no results are returned

        echo json_encode($row);
    }
    else{ //If no userID exists, get all users
        $statement = $conn->prepare("select * from users");
        $statement->execute();
        $row = $statement->fetchAll(PDO::FETCH_ASSOC);
        // use exec() because no results are returned
        echo json_encode($row);
    }
    //Get the User ID from the Query String

}
if($verb == "POST"){ //If post, we need to create a new user

    $stmt = $conn->prepare("INSERT INTO users (userName, youtube, profileInfo)
    VALUES (:userName, :youtube, :profileInfo)");
    $stmt->bindParam(':userName', $userName);
    $stmt->bindParam(':youtube', $youtube);
    $stmt->bindParam(':profileInfo', $profileInfo);

    // insert a row
//
    $rest_json = file_get_contents("php://input"); //Workaround http://stackoverflow.com/questions/1282909/php-post-array-empty-upon-form-submission
    $_POST = json_decode($rest_json, true);
    $userName = $_POST['userName'];
    $youtube = $_POST['youtube'];
    $profileInfo = $_POST['profileInfo'];
//    $userName = $_POST['userName'];
//    $youtube = $_POST['youtube'];
//    $profileInfo = $_POST['profileInfo'];


    $stmt->execute();
    print_r($stmt);
}