<?php
/*
A simple RESTful API router.
*/

include '../inc/config.php';
$verb = $_SERVER['REQUEST_METHOD']; // tells you waht request method someone is using eg get post put delete
$request = $_REQUEST;
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

    $stmt = $conn->prepare("INSERT INTO users (userName, twitch, youtube, instagram, voiceCommsIP , profileInfo)
    VALUES (:userName, :twitch, :youtube, :instagram, :voiceCommsIP,  :profileInfo)");
    $stmt->bindParam(':userName', $userName);
    $stmt->bindParam(':twitch', $twitch);
    $stmt->bindParam(':youtube', $youtube);
    $stmt->bindParam(':instagram', $instagram);
    $stmt->bindParam(':voiceCommsIP', $voiceCommsIP);
//    $stmt->bindParam(':profilePicture', $profilePicture);
    $stmt->bindParam(':profileInfo', $profileInfo);
    // insert a row
    $rest_json = file_get_contents("php://input"); //Workaround http://stackoverflow.com/questions/1282909/php-post-array-empty-upon-form-submission
    $_POST = json_decode($rest_json, true);

    $userName = $_REQUEST['userName'];
    $twitch = $_REQUEST['twitch'];
    $youtube = $_REQUEST['youtube'];
    $instagram = $_REQUEST['instagram'];
    $voiceCommsIP = $_REQUEST['voiceCommsIP'];
//    $profilePicture = $_POST['profilePicture'];
    $profileInfo = $_REQUEST['profileInfo'];

//    $userName = $_POST['userName'];
//    $youtube = $_POST['youtube'];
//    $profileInfo = $_POST['profileInfo'];


    $stmt->execute();
   $id = $conn->lastInsertId();
    echo json_encode($id);

//    print_r($stmt);
//    print_r($_POST);
}else {
    $stmt = $conn->prepare("INSERT INTO groups (groupName, groupInfo, groupPicture)
    VALUES (:groupName, :groupInfo, :groupPicture");
    $stmt->bindParam(":groupName", $groupName);
    $stmt->bindParam(":groupInfo", $groupInfo);
    $stmt->bindParam(":groupPicture", $groupPicture);

    // insert a row
    $rest_json = file_get_contents("php://input"); //Workaround http://stackoverflow.com/questions/1282909/php-post-array-empty-upon-form-submission
    $_POST = json_decode($rest_json, true);
    $groupName = $_POST['groupName'];
    $groupInfo= $_POST['groupInfo'];
    $groupPicture = $_POST['groupPicture'];

}