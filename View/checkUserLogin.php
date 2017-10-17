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
            if (isset($_POST['remember'])) {
                setcookie($userLogin, $name, time() + (86400 * 30), "/");
            } else {
//                session_start();
//                $_SESSION["name"] = $name;
//                header("location:chicha.php");
            }
//            header("location:chicha.php?name=$name&password=$password");
        } else {
//        header('location:register.php');
        }
        mysqli_close($link);
    }
}