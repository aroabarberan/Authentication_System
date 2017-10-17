<?php
$userLogin = 'user';

function islogin($users, $name, $password)
{
    for ($i = 0; $i < count($users) ; $i++) {
        if ($name == $users[$i]['name'] && $password == $users[$i]['password']) {
            return true;
        }
    }
    return false;
}

function deleteCookie($name)
{
    setcookie($name, "", time() - 3600, "/");
}

function isExists($userLogin)
{
    return isset($_COOKIE[$userLogin]);
}