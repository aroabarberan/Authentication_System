<?php
require_once('../DataBase/dataBase.php');
require_once('functionsCookies.php');

if (isset($_POST['logOutBtn'])) {
    deleteCookie($userLogin);
    header("location:../index.html");
}