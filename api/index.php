<?php
//include '../inc/all.php';
include '../inc/config.php';
include '../inc/functions.php';
// notes
// anywhere i need a specific id i need to have $requests[""] = path[1];

//get the method verb
$verb = $_SERVER['REQUEST_METHOD'];
$rest_json = file_get_contents("php://input"); //Workaround http://stackoverflow.com/questions/1282909/php-post-array-empty-upon-form-submission
$requests = json_decode($rest_json, true);
//get the path to decide what happens
//$path = explode('/', ltrim($_SERVER['PATH_INFO'], "/"));

//gets the data into array

$function = $requests["function"];


//do relevant stuff with path[1]
switch ($function) {
    case "users":
        switch ($verb) {
            case "GET":
                $requests["userName"] = $path[1];
                $results = getUser($requests);
                break;
            case "POST":
                $results = createProfile($requests);
                break;
            case "PATCH":
                $requests["userName"] = $path[1];
                $results = editUser($requests);
                break;
            default:
                $results = methodNotAllowed();
        }
        break;
    case "friend":
        switch ($verb) {
            case "GET":
                $requests["getFriend"] = $path[1];
                $results = getFriend($requests);
                break;
            case "POST":
                $results = addFriend($requests);
                break;
            case "DELETE":
                $requests["deleteFriend"] = $path[1];
                $results = deleteFriend($requests);
                break;
            default:
                $results = methodNotAllowed();
        }
        break;
    case "group":
        switch ($verb) {
            case "GET":
                $results = getGroup($requests);
                break;
            case "POST":
                $results = createGroup($requests);
                break;
            case "PATCH":
                $requests["editGroup"] = $path[1];
                $results = editGroup($requests);
                break;
            case "DELETE":
                $requests["deleteGroup"] = $path[1];
                $results = deleteGroup($requests);
                break;
            default:
                $results = methodNotAllowed();
        }
        break;
    case "search":
        switch ($verb) {
            case "GET":
                $results = searchGame();
            default:
                $results = methodNotAllowed();
        }
        break;
    case "games":
        switch ($verb) {
            case "GET":
                $results = getGame($requests);
            case "POST":
                $results = addGame($requests);
                break;
            case "DELETE":
                $results = deleteGame($requests);
                break;
            default:
                $results = methodNotAllowed();
        }
        break;
    case "pictures":
        switch ($verb) {
            case "GET":
                $requests["getPicture"] = path[1];
                $results = addPicture($requests);
            case "POST":
                $results = addPicture($requests);
                break;
            case "DELETE";
                $results = deletePicture($requests);
                break;
            default:
                $results = methodNotAllowed();
        }
        break;
    default:
        $results["meta"]["feedback"] = "Unrecognised URI.";
        $results["meta"]["status"] = 404;
        $results["meta"]["ok"] = false;
}

$results['meta']["requests"] = $requests;
$results['meta']["verb"] = $verb;
$results['meta']["path"] = $path;

//check if requested to send json
$json = !(stripos($_SERVER['HTTP_ACCEPT'], 'application/json') === false);

//check is everything was ok
if (isset($results["meta"]["ok"]) && $results["meta"]["ok"] !== false) {
    $status = isset($results["meta"]["status"]) ? $results["meta"]["status"] : 200;
    $message = isset($results["meta"]["message"]) ? $results["meta"]["message"] : "OK";

} else {
    $status = isset($results["meta"]["status"]) ? $results["meta"]["status"] : 500;
    $message = isset($results["meta"]["message"]) ? $results["meta"]["message"] : "Error";
}

header("HTTP/1.1 $status $message");

//send the results, send by json if json was requested
if ($json) {
    //
    header("Content-Type: application/json");
    echo json_encode($results);
} else { //else send by plain text
    header("Content-Type: text/plain");
    echo("results: ");
    var_dump($results);
}