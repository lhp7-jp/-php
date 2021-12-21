<?php
// index.php

session_start();

$_SESSION['lastName'] = 'Adoux';
$_SESSION['firstName']   = 'Jean-Pierre';
$_SESSION['age']     = 55;
// Works if session cookie was accepted
//echo '<br /><a href="page2.php">page 2</a>';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./assets/css/style.css" rel="stylesheet" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Exercice 2</title>

</head>

<body>
    <h3>Welcome to page2</h3>
    <h3><?= "Votre navigateur a pour \"User Agent\":<br />" . htmlEntities($_SERVER["HTTP_USER_AGENT"]) ?></h3>
    <h3><?= "Votre serveur a pour \"adresse\":<br />" . htmlEntities($_SERVER["REMOTE_ADDR"]) ?></h3>
    <h3><?= "Votre serveur a pour \"nom\":<br />" . htmlEntities($_SERVER["SERVER_NAME"]) ?></h3>

    <button onclick="window.location.href='page2.php';">page 2</button>
</body>

</html>