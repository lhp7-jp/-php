<?php


// exercice 4

if (!empty($_POST)) {

    $email = $_POST["email"];
    $password = $_POST["password"];

    setcookie("email", $email);
    setcookie("password", $password);

    header("Location: infos.php");
}


?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=*, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Exercice 4</title>
</head>

<body>


    <form action="index.php" class="row g-3 ms-5 mt-5" method="POST">
        <div class="col-md-2">
            <label for="email" class="form-label">Email</label>
            <input name="email" type="email" class="form-control" id="inputEmail4">
        </div>
        <div class="col-md-2">
            <label for="password" class="form-label">Password</label>
            <input name="password" type="password" class="form-control" id="inputPassword4">
        </div>
        <div>
            <input type="submit" class="btn btn-danger w-25"></input>
        </div>
    </form>

</body>

</html>