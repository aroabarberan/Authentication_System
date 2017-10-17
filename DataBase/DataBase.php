<?php

//require_once 'functionsCookies.php';

class DataBase
{
    public $host = "localhost";
    public $username = "root";
    public $password = "";
    public $database = "authentication_system";

    function connect()
    {
        return mysqli_connect($this->host, $this->username, $this->password, $this->database);
    }

    public static function readFileEnv()
    {
        $file = fopen('../.env', 'r');
        while (!feof($file)) {
            $line = fgets($file);
            $fields = explode('=', $line);
        }
        return $fields;
    }

    public static function getAllUsersDataBase($link)
    {
        $result = mysqli_query($link, "SELECT * FROM users");
        $users = [];
        while ($row = mysqli_fetch_assoc($result)) {
            array_push($users, $row);
        }

        return $users;
    }

}