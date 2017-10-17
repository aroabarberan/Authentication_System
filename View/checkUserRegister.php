<?php
require_once '../DataBase/DataBase.php';
require_once 'functionsCookies.php';

//if (isExists($userLogin)) {
//    header("location:chicha.php");
//}

if (isset($_POST['registerBtn'])) {
    if (!empty($_POST['name']) || !empty($_POST['email']) || !empty($_POST['password'])) {
        $link = DataBase;
        $name = filter_input(INPUT_POST, "name");
        $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
        $password = sha1($_POST['password']);

        $users = DataBase::getAllUsersDataBase($link);

        if (!islogin($users, $name, $password)) {
            $query = "INSERT INTO users (name, email, password) VALUES ('$name','$email', '$password')";
            mysqli_query($link, $query);
            mysqli_close($link);
//            header("location:chicha.php?name=$name");
            setcookie('user', $name, time() + (86400 * 30), "/");
//            header('location:chicha.php');
//                session_start();
//                $_SESSION["name"] = $name;
//                header("location:chicha.php");
        }
    } else {
//            header('location:register.php');
    }
}

