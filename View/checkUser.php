<?php
require_once('../DataBase/dataBase.php');
require_once('functionsCookies.php');

function getAllUsers($link)
{
    $result = mysqli_query($link, "SELECT * FROM users");
    $users = [];
    while ($row = mysqli_fetch_assoc($result)) {
        array_push($users, $row);
    }
    return $users;
}

$link = dataBaseConection();

if (isset($_POST['registerBtn'])) {
    $name = filter_input(INPUT_POST, "name");
    $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
    $password = sha1($_POST['password']);
    $remember_token = '';
    $is_admin = 0;


    $query = "INSERT INTO users (name, email, password, remember_token, is_admin) VALUES ('$name','$email', '$password', '$remember_token', '$is_admin')";
    mysqli_query($link, $query);


    if (isset($_POST['remember'])) {
        if (isExists($name)) {
            header("location:chicha.php");
        }

        if (islogin(getAllUsers($link), $name, $password)) {
            setcookie($userLogin, $name, time() + (86400 * 30), "/");
            header("location:chicha.php");
        } else {
            header("location:login.php");
        }
        $is_admin = $_POST['remember'];
        $remember_token = $password;
    }
    mysqli_close($link);
}
