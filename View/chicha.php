<?php
require_once '../DataBase/DataBase.php';
require_once '../Model/Cookie.php';

session_start();
if (!isset($_SESSION['user']) && !Cookie::isExists('user')) {
    header('location:login.php');
}
?>
<p>Hola, soy la chicha que solo se puede ver si estas autenticado</p>
