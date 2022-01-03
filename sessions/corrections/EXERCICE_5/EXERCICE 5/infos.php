<?php

// exercice 5


if (isset($_POST["dennis"])) {
    setcookie("email", $_POST["email"]);
    setcookie("password", $_POST["password"]);
    header("Refresh: 0");
}


echo $_COOKIE["email"] . "<br>";
echo $_COOKIE["password"];



?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 5</title>
</head>

<body>
    <form class="row g-3 ms-5 mt-5" method="POST">
        <div class="col-md-2">
            <label for="email" class="form-label">Modif Email</label>
            <input name="email" type="email" class="form-control" id="inputEmail4">
        </div>
        <div class="col-md-2">
            <label for="password" class="form-label">Modif Password</label>
            <input name="password" type="password" class="form-control" id="inputPassword4">
        </div>
        <div>
            <input name="dennis" type="submit" class="btn btn-danger w-25"></input>
        </div>
        <!-- <a href="infos.php" class="btn btn-danger">REFRESH</a> -->

    </form>
</body>

</html>