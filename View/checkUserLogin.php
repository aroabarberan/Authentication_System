<?php

require_once '../DataBase/dataBase.php';
require_once '../Model/Cookie.php';

session_start();
if (isset($_SESSION['user']) || Cookie::isExists('user')) {
    header("location:chicha.php");
}

if (isset($_POST['loginBtn']) && !empty($_POST['name']) && !empty($_POST['password'])) {
    $users = DataBase::getUsers();
    $name = filter_input(INPUT_POST, "name");
    $password = sha1($_POST['password']);

    if (Cookie::islogin($users, $name, $password)) {
        if (isset($_POST['remember'])) {
            setcookie('user', $name, time() + (86400 * 30), "/");
            header("location:chicha.php");
        } else {
            session_start();
            $_SESSION['user'] = 'PHPSESSID';
            header("location:chicha.php");
        }
    } else {
        // TODO
        echo "<h1>Error. You are not login. Get out!!!!.</h1>";
    }
} else {
    header("location:register.php");
}
