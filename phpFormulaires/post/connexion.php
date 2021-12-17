<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>
<body>
<form method="post" acction="" class="text-center">
          <div>
            <label for="mailPseudo">Mail/Pseudo </label>
                <span class="text-danger">
                    <?= $msgErrors["mailPseudo"] ?? "" ?>
                </span>
          <input value="<?= isset($_POST['mailPseudo']) ? htmlspecialchars($_POST["mailPseudo"]) : ""?>" type="text" name="mailPseudo" placeholder=""/>
        </div>
        <div>
          <label for="pwd">Mot de passe : </label><span class="text-danger">
                        <!-- je verifie la clef nom dans mon tableau msgErrors si oui je l'affiche -->
                        <?= $msgErrors["pwd"] ?? "" ?>
          <input value="<?= isset($_POST['pwd']) ? htmlspecialchars($_POST["pwd"]) : ""?>" type="password" name="pwd" placeholder=""/><br />
        </div>
        <h1></h1>
        <input type="submit" value="Connexion" name="submitButton" />
</form>








</body>
</html>