<?php
require "./controller.php";
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>Contacts</title>
</head>


<body>
  <div class="row pb-5 bg-warning text-dark text-center justify-content-center ">
      <h1>Contact</h1>
      <h1></h1>
      <h3>Veuillez renseigner les champs ci-dessous ,svp.</h3>
      <h3></h3>
      
    <form action="./index.php" method="get" class="text-center">
      <fieldset>
        <div>
          <!-- je teste si input sendName est présent dans $_GET si oui je l'affiche en utilisant htmlspecialchars -->
          <label for="name">Votre nom : </label>
          <input value="<?= isset($_GET['sendName']) ? htmlspecialchars($_GET["sendName"]) : ""?>" type="text" name="sendName" placeholder=""/>
        </div>
        <div>
          <label for="firstname">Votre prénom : </label>
          <input value="<?= isset($_GET['sendFirstname']) ? htmlspecialchars($_GET["sendFirstname"]) : ""?>" type="text" name="sendFirstname" placeholder=""/><br />
        </div>
        <div>
          <label for="email">Votre email : </label>
          <input value="<?= isset($_GET['sendEmail']) ? htmlspecialchars($_GET["sendEmail"]) : ""?>" type="text" name="sendEmail" placeholder=""/><br />
        </div>
        <div class="col-lg-2 pb-5 text-center justify-content-center">
        <label for="Sujet">Sujet : </label>
         <select class="form-control" name="sendSubject" aria-label="permet de choisir son sujet">
          <option selected disabled>--Menu--</option>
		       <?php foreach ($choiceSubject as $toto => $tata)  { ?>
           <option value="<?= $toto ?>" <?= isset($_GET["Sujet"]) && $_GET["Sujet"] == $toto ? "selected" : "" ?>><?= $tata ?></option>
          <?php } ?>
		    </select> 
        </div>
        <h1></h1>
        <div class="col-6 text-center justify-content-center">
        <label for="floatingTextarea2">Veuillez décrire votre demande</label>
        <textarea name="sendRequest" class="form-control" placeholder="" style="height: 100px"></textarea>
        <h1></h1>
        </div>
        <input type="submit" value="Envoyer" name="submitButton" />
      </fieldset>
    </form>
  </div>

  <!-- Optional JavaScript; choose one of the two! -->
  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>