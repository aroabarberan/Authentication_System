<?php
require_once('../DataBase/DataBase.php');
require_once('functionsCookies.php');


//if (isExists($userLogin)) {
//    header("location:login.php");
//}
//if ($_SESSION['name'] != "PHPSESSID") {
//    header("location:login.php");
//}
if ($_COOKIE['name'] != $_GET['name']) {
    header("location:login.php");
}
?>
<p>Hola, soy la chicha que solo se puede ver si estas autenticado</p>

<?php //if (isExists($userLogin)) { ?>
<!--    <form action="checkChicha.php" method="post">-->
<!--        <input type="submit" name="logOutBtn" id="logOutBtn" value="log out">-->
<!--    </form>-->
<!--    -->

<!--}-->
