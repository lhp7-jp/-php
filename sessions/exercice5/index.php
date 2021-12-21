<?php
// index.php

session_start();
if (!empty($_POST)) {
$login = $_POST['loginName'];
$password = $_POST['passWord'];

setcookie('myLogin',$login);
setcookie('myPassword',$password);
header("Location: page2.php");
};
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
    <title>Exercice 5</title>

</head>

<body>
    <h3>Welcome to Index </h3>

    <form action="" method="post" class="text-center">
      <fieldset>
        <div>
          <!-- je teste si input sendName est présent dans $_GET si oui je l'affiche en utilisant htmlspecialchars -->
          <label for="loginName">Votre login : </label>
          <input value="<?= isset($_POST['loginName']) ? htmlspecialchars($_POST["loginName"]) : ""?>"name="loginName" type="text"  placeholder=""/>
        </div>
        <div>
          <label for="passWord">Votre mot de passe : </label>
          <input value="<?= isset($_POST['passWord']) ? htmlspecialchars($_POST["passWord"]) : ""?>"  name="passWord" type="text"  placeholder=""/><br />
        </div>
        
        <button onclick="window.location.href='page2.php';">page 2</button>

</body>

</html>