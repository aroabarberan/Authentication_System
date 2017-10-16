<?php

require_once('../DataBase/dataBase.php');
require_once('functionsCookies.php');

if (isExists($userLogin)) {
    header("location:chicha.php");
}

if (isset($_POST['loginBtn'])) {
    if (!empty($_POST['name']) && !empty($_POST['password'])) {
        $link = conectionDataBase();
        $users = getAllUsersDataBase($link);
        $name = filter_input(INPUT_POST, "name");
        $password = sha1($_POST['password']);

        if (islogin($users, $name, $password)) {
            header('location:chicha.php');
        }

        if (isset($_POST['remember'])) {
            setcookie($userLogin, $name, time() + (86400 * 30), "/");
        }


        mysqli_close($link);
    } else {
//        header("location:login.php");
    }
}