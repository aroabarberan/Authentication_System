<?php
require_once '../DataBase/DataBase.php';
require_once '../Model/Cookie.php';

session_start();
if (isset($_SESSION['user']) || Cookie::isExists('user')) {
    header("location:chicha.php");
}

if (isset($_POST['registerBtn']) && !empty($_POST['name']) && !empty($_POST['password'])) {
    $name = filter_input(INPUT_POST, "name");
    $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
    $password = sha1($_POST['password']);
    $remember_token = '';

    $users = DataBase::getUsers();

    if (!Cookie::islogin($users, $name, $password)) {
        DataBase::insertUser($name, $email, $password, $remember_token);
        session_start();
        $_SESSION['user'] = 'PHPSESSID';
        header("location:chicha.php");
    } else {
        header("location:login.php");
    }
} else {
    header("location:register.php");
}


