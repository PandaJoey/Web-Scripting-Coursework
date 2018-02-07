<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "USERS";

try {
    $serverdb = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $serverdb->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // sql to create table
    // voice comms needs adjusting
    $sql = "CREATE TABLE USERS (
    userID INT(6) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    userName VARCHAR(60) NOT NULL,
    previousNames VARCHAR(60),
    games VARCHAR (60),
    friends INT,
    groups INT,
    twitch VARCHAR (100),
    youtube VARCHAR (100),
    instagram VARCHAR (100),
    voiceCommsIP VARCHAR (25),
    vcPassword VARCHAR (25),
    profilePicture VARCHAR (100),
    profileInfo TEXT or BLOB
    )";

// not sure if i can use the profilePicture from users to get the same imange,
// also not sure how to go about storing images in the database
    $sql = "CREATE TABLE FRIENDS (
    userID INT (6),
    user1ID INT (6),
    nickname VARCHAR (60)
    PRIMARY KEY (userID, user1ID)
    CONSTRAINT  fk_userID FOREIGN KEY (userID)
    REFERENCES USERS(userID)
    )";

    $sql = "CREATE TABLE GROUPS (
       groupID INT (6),
       userID INT (6),
       event VARCHAR (100),
       eventID INT (6),
       groupPicture VARCHAR (100)
       CONSTRAINT fk_user_ID FOREIGN KEY (userID)
       REFERENCES USERS(userID)

    )";


    // use exec() because no results are returned
    $serverdb->exec($sql);
    echo "Table MyGuests created successfully";
}
catch(PDOException $e)
{
    echo $sql . "<br>" . $e->getMessage();
}

$serverdb = null;
?> */