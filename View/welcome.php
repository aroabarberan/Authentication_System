<?php
session_start();
if (isset($_SESSION['user']) || Cookie::isExists('user')) {
    header("location:chicha.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
          integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <link rel="stylesheet" href="../css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Berkshire+Swash|Nosifer" rel="stylesheet">
    <title>Home Page</title>
</head>
<body>
<main>
    <header class="header">
        <h1 class="welcome">Welcome !!!</h1>
    </header>

    <section class="container">
        <div class="row ">
            <div class="col-sm-5 menus">
                <h1>Are you registered?</h1>
                <a href="register.php"><input type="submit" class="btn btn-primary registerBtn" name="registerBtn"
                                              id="registerBtn" value="Register"></a>
            </div>
            <div class="col-sm-5 menus">
                <h1>Are you logged in?</h1>
                <a href="login.php"><input type="submit" class="btn btn-primary loginBtn" name="loginBtn"
                                           id="loginBtn"
                                           value="Login"></a>
            </div>
        </div>

    </section>


</main>
</body>
<footer class="footer">
    <p>:)</p>
</footer>
</html>