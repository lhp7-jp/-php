<?php
if (session_status() == PHP_SESSION_NONE) session_start();
require "./controller/controlIndex.php";
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="./assets/css/style.css" rel="stylesheet" />
  <title>allPIX</title>
</head>

<body>
  <div class="container-fluid">
    <h1></h1>
    <h1>allPIX</h1>
    <form action="" method="post">
      <!-- je teste si input sendName est présent dans $_POST si oui je l'affiche en utilisant htmlspecialchars -->
      <label for="loginName">Login : </label>
      <input value="<?= isset($_POST['loginName']) ? htmlspecialchars($_POST["loginName"]) : "" ?>" name="loginName" type="text" placeholder="" />
      <h1></h1>
      <label for="passWord">Password : </label>
      <input value="<?= isset($_POST['passWord']) ? htmlspecialchars($_POST["passWord"]) : "" ?>" name="passWord" type="password" placeholder="" /><br />
      <h1></h1>
      <button onclick="window.location.href='index.php';">Connexion</button>
    </form>
  </div>
</body>
</html>