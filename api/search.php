<?php

include __DIR__ . '/config.php';
$verb = $_SERVER['REQUEST_METHOD']; // tells you waht request method someone is using eg get post put delete


// jjs code
//function getGoals($requests)
//{
//    $results = [];
//
//    $requestsNeeded = array("me");
//
//    if (checkRequestsPresent($requests, $requestsNeeded)) {
//        $me = $requests['me'];
//        $row = getUser(array("me" => $me, "username" => $me));
//        if (count($row["rows"]) > 0) {
//            $following = "";
//            //if it includes a username of a user to get goals of
//            if (isset($requests['user'])) {
//                $row = getUser(array("me" => $requests['user'], "username" => $requests['user']));
//                if (count($row["rows"]) > 0) {
//                    $where = "Goal.Username = '${requests['user']}'";
//                } else {
//                    $results["meta"] = noUserFound($me);
//                }
//            } else if (isset($requests['search'])) { //if it includes a search
//                $searches = $requests['search'];
//                $search = "";
//                $searches = explode(" ", $searches);
//                $not = array_search("NOT", $searches, true);
//                $or = array_search('OR', $searches, true);
//                //if using a NOT in query
//                if (($not !== false) && ($not > 0) && ($not < count($searches) - 1)) {
//                    $not1 = "";
//                    $not2 = "";
//                    foreach ($searches as $aSearch) {
//                        if (array_search($aSearch, $searches, true) < $not) {
//                            $not1 .= "${aSearch}%";
//                        } else if (array_search($aSearch, $searches, true) > $not) {
//                            $not2 .= "${aSearch}%";
//                        }
//                    }
//                    $where = "Goal LIKE '%${not1}' AND Goal NOT LIKE '%${not2}'";
//                } else if ($or !== false && $or > 0 && $or < count($searches) - 1) { //if using a OR in query
//                    $or1 = "";
//                    $or2 = "";
//                    foreach ($searches as $aSearch) {
//                        if (array_search($aSearch, $searches, true) < $or) {
//                            $or1 .= "${aSearch}%";
//                        } else if (array_search($aSearch, $searches, true) > $or) {
//                            $or2 .= "${aSearch}%";
//                        }
//                    }
//                    $where = "Goal LIKE '%${or1}' OR Goal LIKE '%${or2}'";
//                } else {
//                    foreach ($searches as $aSearch) {
//                        $search .= "${aSearch}%";
//                    }
//                    $where = "Goal LIKE '%${search}'";
//                }
//            } else { //if not search or username provided assumes goals of users they are following
//                $following = "LEFT JOIN (SELECT * FROM Following WHERE Username1 = '${me}') AS gf ON Goal.Username = Username2";
//                $where = "Username1 IS NOT NULL OR Goal.Username = '${me}'";
//            }
//            $db = new pdodb;
//            $query = "SELECT * FROM Goal ${following} LEFT JOIN (SELECT GoalID FROM Liked WHERE Username = '${me}') AS gl ON ID = GoalID WHERE ${where} ORDER BY Upload, ID;";
//            $goals = $db->query($query);
//
//            $results["meta"]["ok"] = true;
//            $results["rows"] = $goals;
//        } else {
//            $results["meta"] = noUserFound($me);
//        }
//    } else {
//        $results = requestsNotProvided($requestsNeeded);
//    }
//    return $results;
//}


// rich/kits code
//    $results = [];
//
//    try {
//        $DB = new DB();
//
//        $offset = 0;
//        $limit = 25;
//
//        $clause = "";
//
//
//        if (isset($in["id"])) {
//            $id = (int) $in['id'];
//            $clause = "where id = {$id}";
//        } else {
//            if (isset($in["filter"])) {
//                $f = $in["filter"];
//                $clause = "where (cat like '%${f}%' or cap like '%${f}%')";
//            }
//
//            if (isset($in["offset"])) {
//                $offset = abs(intval($in["offset"]));
//            }
//
//            if (isset($in["limit"])) {
//                $limit = min(abs(intval($in["limit"])), 100);
//            }
//        }
//
//        $href = ", concat('/api/2/links/', id) as href";
//
//
//        $q = "SELECT * $href from entries $clause order by id desc limit $limit offset $offset;";
//
//        $rows = $DB->query($q);
//
//        $results["rows"] = $rows;
//        $results["meta"]["ok"] = true;
//        $results["meta"]["query"] = $q;
//        $results["meta"]["offset"] = $offset;
//        $results["meta"]["limit"] = $limit;
//        $results["meta"]["count"] = count($rows);
//    } catch (DBException $dbx) {
//        error_log ($dbx);
//        $results["meta"]["ok"] = false;
//        $results["meta"]["exception"] = $dbx;
//        $debug[0] = $dbx;
//    }
//    return $results;
//}
