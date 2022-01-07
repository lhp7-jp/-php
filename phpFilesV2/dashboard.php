<?php
// dashboard.php
require "./controller/controlDashboard.php";
if (session_status() == PHP_SESSION_NONE) session_start();
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
    <h2>Bonjour, <?= $_COOKIE['myLogin']; ?></h2>
    <h1></h1>
    <h2>Quota : <?= $_COOKIE['myQuota']; ?> MO</h2>
    <h1></h1>
    <h2>Formule : <?= $_COOKIE['myFormule']; ?></h2>
    <h1></h1>
    <h2>Le nombre de fichiers est :  <?= $_SESSION['nbpics'] ?></h2>
    <h1></h1>
    <!-- Le type d'encodage des données, enctype, DOIT être spécifié comme ce qui suit -->
    <form enctype="multipart/form-data" action="" method="post" class="">
      <img id="imgPreview">
      <input name="fileToUpload" id="fileToUpload" type="file" />
      <h1></h1>
      <input type="submit" value="Upload" name="submitButton" />
    </form>
    <h1></h1>
    <button onclick="window.location.href='./gallery.php';">Gallery</button>
    <h1></h1>
    <button onclick="window.location.href='./dashboard.php';">retour</button>
    <h1></h1>
    <button onclick="window.location.href='./deconnexion.php';">Deconnexion</button>
    <h1></h1>
</body>

</html>