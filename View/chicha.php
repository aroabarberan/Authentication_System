<?php
require_once('functionsCookies.php');

if (!isExists($userLogin)) {
    header("location:login.php");
}
?>
<p>Hola, soy la chicha que solo se puede ver si estas autenticado</p>
