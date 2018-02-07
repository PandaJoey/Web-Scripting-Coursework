<?php
//include "../inc/all.php";
include 'config.php';


// user functions
function getUser($requests)
{
    $conn = new pdoDatabase();

    $results = [];
    $neededRequest = array("userName");

    if (isset($_GET['userId'])) { //If user ID exists, return single user
        $userId = $_GET['userId'];
        $statement = $conn->prepare("select * from users where userID = :userID");
        $statement->execute(array(':userID' => $userId));
        $row = $statement->fetch(PDO::FETCH_ASSOC);
        // use exec() because no results are returned
        echo json_encode($row);
    } else { //If no userID exists, get all users

        $statement = $conn->prepare("select * from users");
        $statement->execute();
        $row = $statement->fetchAll(PDO::FETCH_ASSOC);
        // use exec() because no results are returned
        echo json_encode($row);
    }
    //Get the User ID from the Query String

}

function createProfile($requests)
{
        $conn = new pdoDatabase();
        $stmt = $conn->prepare("INSERT INTO users (userName, twitch, youtube, instagram, voiceCommsIP, profilePicture, profileInfo)
    VALUES (:userName, :twitch, :youtube, :instagram, :voiceCommsIP, :profilePicture, :profileInfo)");
        $stmt->bindParam(':userName', $userName);
        $stmt->bindParam(':twitch', $twitch);
        $stmt->bindParam(':youtube', $youtube);
        $stmt->bindParam(':instagram', $instagram);
        $stmt->bindParam(':voiceCommsIP', $voiceCommsIP);
        $stmt->bindParam(':profilePicture', $profilePicture);
        $stmt->bindParam(':profileInfo', $profileInfo);
        // insert a row
        $rest_json = file_get_contents("php://input"); //Workaround http://stackoverflow.com/questions/1282909/php-post-array-empty-upon-form-submission
        $_POST = json_decode($rest_json, true);
        $userName = $requests['userName'];
        $twitch = $requests['twitch'];
        $youtube = $requests['youtube'];
        $instagram = $requests['instagram'];
        $voiceCommsIP = $requests['voiceCommsIP'];
        $profilePicture = $requests['profilePicture'];
        $profileInfo = $requests['profileInfo'];

//    $userName = $_POST['userName'];
//    $youtube = $_POST['youtube'];
//    $profileInfo = $_POST['profileInfo'];


        $stmt->execute();
        print_r($stmt);
        print_r($_POST);
    }

    function editUser($requests)
    {

    }

    function deleteUser($requests)
    {

    }

// friend functions.
    function getFriend($requests)
    {

    }

    function addFriend($requests)
    {

    }

    function deleteFriend($request)
    {

    }


// group functions
    function getGroup($requests)
    {

    }

    function createGroup($requests)
    {

    }

    function editGroup($requests)
    {

    }

    function deleteGroup($requests)
    {

    }

// search functions
    function searchGame()
    {

    }

// game functions
    function getGame()
    {

    }

    function addGame()
    {

    }

    function deleteGame()
    {

    }

//helper functions
    function methodNotAllowed()
    {

    }