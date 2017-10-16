<?php
$userLogin = 'user';
$userNoLogin = '';

function islogin($users, $name, $password)
{
    for ($i = 0; $i < count($users) ; $i++) {
        if ($name == $users[$i]['name'] && $password == $users[$i]['password']) {
            return true;
        }
    }
    return false;
}

function delete($name)
{
    setcookie($name, "", time() - 3600, "/");
}

function isExists($name)
{
    return isset($_COOKIE[$name]);
}