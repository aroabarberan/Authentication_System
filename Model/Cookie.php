<?php


class Cookie
{

    public static function delete($name)
    {
        setcookie($name, "", time() - 3600, "/");
    }

    public static function exists($name)
    {
        return isset($_COOKIE[$name]);
    }
}