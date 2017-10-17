<?php
require_once('../DataBase/dataBase.php');
require_once('functionsCookies.php');

if (isExists($userLogin)) {
    header("location:chicha.php");
}

if (isset($_POST['registerBtn'])) {
    if (!empty($_POST['name']) || !empty($_POST['email']) || !empty($_POST['password'])) {
        $link = conectionDataBase();
        $name = filter_input(INPUT_POST, "name");
        $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
        $password = sha1($_POST['password']);
        $remember_token = '';
        $is_admin = 0;
        $users = getAllUsersDataBase($link);

        if (!islogin($users, $name, $password)) {
            $query = "INSERT INTO users (name, email, password, remember_token, is_admin) VALUES ('$name','$email', '$password', '$remember_token', '$is_admin')";
            mysqli_query($link, $query);
            header("location:chicha.php?name=$name&password=$password");
            if (isset($_POST['remember'])) {
                setcookie($userLogin, $name, time() + (86400 * 30), "/");
                $is_admin = $_POST['remember'];
                header("location:chicha.php?name=$name&password=$password");
            }
        } else {
            header('location:register.php');
        }
        mysqli_close($link);
    }
} else {
    header('location:register.php');
}

