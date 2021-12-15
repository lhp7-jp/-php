<?php
var_dump($_GET);
if (isset($_GET['submitButton'])) {
  //  récupérer les données du formulaire en utilisant 
  //  la valeur des attributs name comme clé 
  $name = $_GET['sendName'];
  $firstname = $_GET['sendFirstname'];
  $email = $_GET['sendEmail'];
  $Subject = $_GET['sendSubject'];
  $request = $_GET['sendRequest'];

  if (isset($_GET['sendName'])) {
    // or (empty($_GET['sendName'])) {
    echo "Veuillez entrez votre nom, svp";
  } else {
    $name = $_GET['sendName'];
  };
  if (isset($_GET['sendFirstname'])) {
    // or (empty($_GET['sendName'])) {
    echo "Veuillez entrez votre prénom, svp";
  } else {
    $firstname = $_GET['sendFisrtname'];
  };
  if (isset($_GET['sendEmail'])) {
    // or (empty($_GET['sendName'])) {
    echo "Veuillez entrez votre email, svp";
  } else {
    $email = $_GET['sendEmail'];
  };
  if (isset($_GET['sendSubject'])) {
    // or (empty($_GET['sendName'])) {
    echo "Veuillez entrez votre sujet, svp";
  } else {
    $subject = $_GET['sendSubject'];
  };
  if (isset($_GET['sendRequest'])) {
    // or (empty($_GET['sendName'])) {
    echo "Veuillez entrez votre demande, svp";
  } else {
    $request = $_GET['sendRequest'];
  };

  // header('Location: infos.php');
  var_dump($_GET);
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
  <title>Contacts</title>
</head>


<body>
  <div class="container lh-lg bg-warning text-dark text-center ">

    <div class="container_Prin pb-5 text-center justify-content-center">
      <h1>Contact</h1>
      <h1></h1>

      <div class="row text-center justify-content-center">
        <h3>Veuillez renseigner les champs ci-dessous ,svp.</h3>
        <h3></h3>
      </div>
    </div>

    <form action="./index.php" method="get" class="text-center">
      <fieldset>
        <div>
          <label for="name">Votre nom : </label>
          <input type="text" name="sendName" placeholder="" />
        </div>
        <div>
          <label for="firstname">Votre prénom : </label>
          <input type="text" name="sendFirstname" placeholder="" /><br />
        </div>
        <div>
          <label for="email">Votre email : </label>
          <input type="text" name="sendEmail" placeholder="" /><br />
        </div>

        <label for="selectSujet">Sujet</label>
        <button class="m-2 btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
          Select :
        </button>
        <ul name="sendSubject" class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
          <li><a class="dropdown-item">+ infos</a></li>
          <li><a class="dropdown-item">+ Prix</a></li>
          <li><a class="dropdown-item">+ autres</a></li>
        </ul>
        <h1></h1>
        <label for="floatingTextarea2">Veuillez décrire votre demande</label>
        <textarea name="sendRequest" class="form-control" placeholder="" style="height: 100px"></textarea>
        <h1></h1>
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