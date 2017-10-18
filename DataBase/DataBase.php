<?php

//require_once 'functionsCookies.php';

class DataBase
{
    public $host = "localhost";
    public $username = "root";
    public $password = "";
    public $database = "authentication_system";

    public static function connect()
    {
        $datas = DataBase::readFileEnv();
        return mysqli_connect($datas['DB_HOST'], $datas['DB_USERNAME'], $datas['DB_PASSWORD'], $datas['DB_DATABASE']);
    }

    public static function readFileEnv()
    {
        $file = fopen('../.env', 'r');
        $datas = [];
        while (!feof($file)) {
            $line = fgets($file);
            $fields = explode('=', trim($line));
            $datas[$fields[0]] = $fields[1];
        }
        fclose($file);
        return $datas;
    }

    public static function insertUser($name, $email, $password, $remember_token)
    {
        $link = DataBase::connect();
        $query = "INSERT INTO users (name, email, password, remember_token) VALUES ('$name','$email', '$password', '$remember_token')";
        mysqli_query($link, $query);
        mysqli_close($link);
    }

    public static function getUsers()
    {
        $link = DataBase::connect();
        $result = mysqli_query($link, "SELECT * FROM users");
        $users = [];
        while ($row = mysqli_fetch_assoc($result)) {
            array_push($users, $row);
        }

        return $users;
    }

    public static function isLogged($users, $name, $password)
    {
        for ($i = 0; $i < count($users); $i++) {
            if ($name == $users[$i]['name'] && $password == $users[$i]['password']) {
                return true;
            }
        }
        return false;
    }

}