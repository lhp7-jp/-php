<?php
//
if (isset($_GET['sendName'],$_GET['sendFirstname'],$_GET['sendEmail'],$_GET['sendSubject'],$_GET['sendResquest'])) {
  header("Location: ./index.php");
  exit;
};

function collecteInfos() {
 if (isset($_GET['sendName'])) {
     echo '<p class="text-center">Votre nom : '.$_GET['sendName'].'</p>';
     echo '<p class="text-center">Votre prénom : '.$_GET['sendFirstname'].' </p>';
     echo '<p class="text-center">Votre email : '.$_GET['sendEmail'].' </p>';
     echo '<p class="text-center">Votre sujet : '.$_GET['sendSubject'].' </p>';
     echo '<p class="text-center">Votre demande : '.$_GET['sendResquest'].' </p>';
  } else {
      echo 'vous avez oublié de remplir votre formulaire';
  }
 return '';
};
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>Contact</title>

</head>

<body>
  <div class="row col-lg-2 pb-5 bg-warning text-dark text-center justify-content-center"></div>

  <p><?= collecteInfos() ?></p>

   <div class="d-flex justify-content-center">
   <a class="btn btn-primary col-lg-2" href="http://phpFormulaires/index.php">
    <input type="submit" value="Retour" name="retourfirstpage" />
   </a>
   </div>
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