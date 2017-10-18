<?php


class Cookie
{
    public $userLogin = 'user';

    public static function islogin($users, $name, $password)
    {
        for ($i = 0; $i < count($users); $i++) {
            if ($name == $users[$i]['name'] && $password == $users[$i]['password']) {
                return true;
            }
        }
        return false;
    }

    public static function delete($name)
    {
        setcookie($name, "", time() - 3600, "/");
    }

    public static function isExists($userLogin)
    {
        return isset($_COOKIE[$userLogin]);
    }
}