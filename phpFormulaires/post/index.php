<?php
require "./controlindex.php";
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>Inscription</title>
</head>

<body>
  <!-- Nous testons si le POST n'est pas vide est que le tableau d'erreur est vide -->
  <!-- Si OK, nous affichons un lien vers connexion.php -->
  <!-- Sinon nous affichons le formulaire d'inscription -->
  <?php if (!empty($_POST) && empty($msgErrors)) { ?>
    <p>Inscription OK, veuillez vous connecter</p>
    <a class="btn btn-outline-primary" href="connexion.php">Connexion</a>
  <?php } else { ?>

    <div class="row pb-5 bg-warning text-dark text-center justify-content-center ">
      <h1>Inscription</h1>
      <h1></h1>
      <h3>Veuillez renseigner les champs ci-dessous ,svp.</h3>
      <h3></h3>

      <form action="index.php" method="post" class="text-center">
        <div>
          <!-- je teste si input name est présent dans $_POST si oui je l'affiche en utilisant htmlspecialchars -->
          <label for="name">Votre nom : </label><span class="text-danger">
            <!-- je verifie la clef nom dans mon tableau msgErrors si oui je l'affiche -->
            <?= $msgErrors["name"] ?? "" ?>
          </span>
          <input value="<?= isset($_POST['name']) ? htmlspecialchars($_POST["name"]) : "" ?>" type="text" name="name" placeholder="Durand" />
          <label for="firstName">Votre prénom : </label><span class="text-danger">
            <!-- je verifie la clef nom dans mon tableau msgErrors si oui je l'affiche -->
            <?= $msgErrors["firstName"] ?? "" ?>
            </span>
          <input value="<?= isset($_POST['firstName']) ? htmlspecialchars($_POST["firstName"]) : "" ?>" type="text" name="firstName" placeholder="Jean-Pierre" /><br />
          <label for="pseudo">Votre pseudo : </label><span class="text-danger"><span class="text-danger">
                <?= $msgErrors["pseudo"] ?? "" ?>
          </span>
          <input value="<?= isset($_POST['pseudo']) ? htmlspecialchars($_POST["pseudo"]) : "" ?>" type="text" name="pseudo" placeholder="JP" /><br />
          <div>
          <label for="mdPwd">Mot de passe : </label><span class="text-danger">
            <?= $msgErrors["mdPwd"] ?? "" ?>
            <input value="<?= isset($_POST['mdPwd']) ? htmlspecialchars($_POST["mdPwd"]) : "" ?>" type="password" name="mdPwd" placeholder="" /><br />
        </div>
        <div>
          <label for="confirmdPwd">Confirmation de mot de passe : </label><span class="text-danger">
            <?= $msgErrors["confirmdPwd"] ?? "" ?>
          </span>
          <input value="<?= isset($_POST['confirmdPwd']) ? htmlspecialchars($_POST["confirmdPwd"]) : "" ?>" type="password" name="confirmdPwd" placeholder="" /><br />
          <label for="urlGitup">Url/Gitup : </label><span class="text-danger">
             <?= $msgErrors["urlGitup"] ?? "" ?>
          </span>
          <input value="<?= isset($_POST['urlGitup']) ? htmlspecialchars($_POST["urlGitup"]) : "" ?>" type="text" name="urlGitup" placeholder="https://lamanu.fr" /><br />
        </div>
        <h1></h1>
        <div class="mb-3 form-check">
          <!-- Nous ne gardons pas en valeur la checkBox, nous forçons l'utilisateur a re valider -->
          <input type="checkbox" class="form-check-input" name="checkBox" id="checkBox">
          <label class="form-check-label" for="checkBox">Accepter les CGU</label><span class="text-danger"><span class="text-danger">
              <?=
              $arrayError["checkBox"] ?? " ";
              ?>
            </span>
        </div>
        <h1></h1>
        <button name="submitButton" type="submit" class="btn btn-primary">Inscription</button>
      </form>
      <a href="connexion.php">ALLER SUR CONNEXION</a>
    </div>
  <?php } ?>

  <!-- Optional JavaScript; choose one of the two! -->
  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>