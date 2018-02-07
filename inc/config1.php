<?php

/**
 * Created by PhpStorm.
 * User: Joe
 * Date: 12/04/2016
 * Time: 14:19
 */
class pdoDatabase
{
    private $conn;

    public function __construct()
    {
        $dsn = "mysql:host=" . servername . ";charset-UTF-8";
        $option = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
        try {
            $this->conn = new PDO($dsn, username, password, $option);
        } catch (PDOException $failure) {
            echo 'Connection failed: ' . $failure->getMessage();
        }
        if (!pdoDatabase::dbExists()) {
            $this->conn->query("CREATE DATABASE " . dbname);
        }
        $this->conn->query("USE " . dbname);
        try {
            $this->conn->query(createdatabase);
        } catch (PDOException $failure) {
            echo 'Server failed: ' . $failure->getMessage();
        }
    }

    private function dbExists()
    {
        $showQuery = "SHOW DATABASES LIKE '" . dbname . "'";
        $showResult = $this->conn->query($showQuery);
        return (boolean)($showResult->fetch());
    }

    public function prepare($sql, $bindings = null)
    {
        try {
            if (isset($bindings)) {
                $results = $this->conn->prepare($sql);
                $results->execute($bindings);
            } else {
                $results = $this->conn->query($sql);
            }

            if (strpos($sql, "SELECT") !== false) {
                return $results->fetchAll(PDO::FETCH_ASSOC);
            }

            return $results->rowCount();

        } catch (PDOException $failure) {
            $results = [];
            $results["meta"]["ok"] = false;
            $results["meta"]["exception"] = $failure;

            return $results;
        }
    }

    public function lastInsertId()
    {
        return $this->conn->lastInsertId();
    }
}