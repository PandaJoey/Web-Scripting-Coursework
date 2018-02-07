<?php

include __DIR__ . '/config.php';
$verb = $_SERVER['REQUEST_METHOD']; // tells you waht request method someone is using eg get post put delete

//echo "<table style='border: solid 1px black;'>";
//echo "<tr><th>userID</th><th>userName</th><th>twitch</th><th>youtube</th><th>instagram</th><th>voiceCommsIP</th><th>profileInfo</th></tr>";

//class TableRows extends RecursiveIteratorIterator {
//    function __construct($it) {
//        parent::__construct($it, self::LEAVES_ONLY);
//    }
//
//    function current() {
//        return "<td style='width: 150px; border: 1px solid black;'>" . parent::current(). "</td>";
//    }
//
//    function beginChildren() {
//        echo "<tr>";
//    }
//
//    function endChildren() {
//        echo "</tr>" . "\n";
//    }
//}
//
//try {
//    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
//    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//    $stmt = $conn->prepare("SELECT userID, userName, twitch, youtube, instagram, voiceCommsIP, profileInfo FROM users");
//    $stmt->execute();
//
//    // set the resulting array to associative
//    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
//
//    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
//        echo $v;
//    }
//}
//catch(PDOException $e) {
//    echo "Error: " . $e->getMessage();
//}
//$conn = null;
//echo "</table>";

//function getUser($requests)
//{
//    $results = [];
//
//    $requestsNeeded = array("username");
//
//    if (checkRequestsPresent($requests, $requestsNeeded)) {
//        $db = new pdodb;
//        $query = "SELECT * FROM users WHERE userName = ?;";
//        $bindings = array($requests["username"]);
//        $row = $db->query($query, $bindings);
//        if (count($row) > 0) {
//            if (isset($requests['password'])) {
//                $query = "SELECT useName FROM users WHERE useName = ?";
//                $bindings = array($requests["username"], $requests['password']);
//                $user = $db->query($query, $bindings);
//                if (count($user) == 0) {
//                    $results["meta"]["ok"] = false;
//                    $results["meta"]["status"] = 401;
//                    $results["meta"]["message"] = "Unauthorized";
//                    $results['meta']['feedback'] = "Password is wrong please try again.";
//                } else {
//                    $results["meta"]["ok"] = true;
//                    $results["rows"] = $user;
//                }
//            } else if (isset($requests['me'])) {
//                $query = "SELECT * FROM User WHERE Username = ?;";
//                $bindings = array($requests["me"]);
//                $row = $db->query($query, $bindings);
//                if (count($row) > 0) {
//                    $query = "SELECT * FROM User LEFT JOIN (SELECT * FROM Following WHERE Username1 = ?) AS gf ON Username = Username2 WHERE Username = ?;";
//                    $bindings = array($requests["me"], $requests['username']);
//                    $user = $db->query($query, $bindings);
//
//                    $results["meta"]["ok"] = true;
//                    $results["rows"] = $user;
//                } else {
//                    $results["meta"] = noUserFound($requests['username']);
//                }
//            }
//        } else {
//            $results["meta"] = noUserFound($requests['username']);
//        }
//    } else {
//        $results = requestsNotProvided($requestsNeeded);
//    }
//    return $results;
//}