<?php
require_once '../DataBase/DataBase.php';
require_once '../Model/Cookie.php';

session_start();
if (!isset($_SESSION['user']) && !Cookie::exists('user')) {
    header('location:login.php');
}
?>
<h1>Hola, soy la chicha que solo se puede ver si estas autenticado</h1>
