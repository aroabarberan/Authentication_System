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

<body>
<header class="header">
    <h1 class="register">Register </h1>
</header>
<main class=" container main">
    <form class="form-horizontal form" action="checkUserRegister.php" method="POST">
        <div class="form-group">
            <label for="name" class="col-lg-2 control-label">Name</label>
            <div class="col-lg-10">
                <input type="text" class="form-control name" name="name" id="name"
                       placeholder="name">
            </div>
        </div>
        <div class="form-group">
            <label for="email" class="col-lg-2 control-label">Email</label>
            <div class="col-lg-10">
                <input type="email" class="form-control" name="email" id="email"
                       placeholder="email">
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
            <div>
                <label for="remember" class="col-lg-2 control-label">Remember</label>

                <input type="checkbox" class="col-lg-offset-2 col-lg-1 remember" name="remember" id="remember"
                       value="1">
            </div>
        </div>
        <div class="form-group">
            <div class="col-lg-offset-2 col-lg-10">
                <input type="submit" class="btn btn-primary registerBtn" name="registerBtn" id="registerBtn"
                       value="Register">
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
