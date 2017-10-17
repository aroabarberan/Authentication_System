<?php
require_once('../DataBase/dataBase.php');
require_once('functionsCookies.php');

if (isExists($userLogin)) {
    header("location:login.php");
}
?>
    <p>Hola, soy la chicha que solo se puede ver si estas autenticado</p>

<?php if (isExists($userLogin)) { ?>
    <form action="checkChicha.php" method="post">
        <input type="hidden" name="name" id="name" value="<? $_GET['name'] ?>">
        <input type="submit" name="logOutBtn" id="logOutBtn" value="log out">
    </form>
    <?php

}
