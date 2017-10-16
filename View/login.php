<?php require_once("functionsCookies.php"); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
          integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Berkshire+Swash|Nosifer" rel="stylesheet">
    <title>Authenticate System</title>
</head>
<?php
if (isExists($userLogin)) {
    header("location:chicha.php");
}
?>
<body>
<header class="header">
    <h1 class="login">Login </h1>
</header>
<main class=" container main">
    <form class="form-horizontal form" action="checkUser.php" method="POST">

        <div class="form-group">
            <label for="email" class="col-lg-2 control-label">Email</label>
            <div class="col-lg-10">
                <input type="email" class="form-control" name="email" id="email"
                       placeholder="Contraseña">
            </div>
        </div>
        <div class="form-group">
            <label for="password" class="col-lg-2 control-label">Password</label>
            <div class="col-lg-10">
                <input type="password" class="form-control" name="password" id="password"
                       placeholder="password">
            </div>
        </div>
        <div class="form-group">
            <div class="col-lg-offset-2 col-lg-10">
                <div>
                    <input type="checkbox" name="remember" id="remember" value="1">
                    <label>Remember Me</label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-lg-offset-2 col-lg-10">
                <input type="submit" class="btn btn-primary loginbtn" name="loginbtn" id="loginbtn" value="Login">
            </div>
        </div>
        <a href="../index.html" class="back">Back</a>
    </form>
</main>
</body>
<footer class="footer">
    <p>:)</p>
</footer>
</html>
