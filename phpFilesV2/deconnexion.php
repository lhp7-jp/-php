<?php
setcookie('myLogin','',time()-3600);
setcookie('myPassword','',time()-3600);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./assets/css/style.css" rel="stylesheet" />
    <title>Dashboard</title>
</head>

<body>
    <h1>allPIX</h1>
    <h2>Vous avez bien été déconnecté.</h2>
    <h1></h1>
    <button onclick="window.location.href='./index.php';">Accueil</button>
    <h1></h1>
</body>

</html>