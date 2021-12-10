<?php
function getParamUrl(){
if (isset($_GET['lastname']) && isset($_GET['firstname'])) {
   if (isset($_GET['age'])) {
    $paramUrl1 = $_GET['lastname'];
    $paramUrl2 = $_GET['firstname'];
    $paramUrl3 = $_GET['age'];
    echo '<p class="text-center">'.$paramUrl1.'</p>';
    echo '<p class="text-center">'.$paramUrl2.'</p>';
    echo '<p class="text-center">'.$paramUrl3.'</p>';
    } else {
    echo 'Le paramètre age n est pas présent ';
  }
};
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
  <title>Exo2</title>

</head>


<body>

<div class="row">
  
  <a class="btn btn-primary col-lg-2" href="http://phpparamurl/Exo2/index.php?lastname=PARKER&firstname=Parker">
    <input type="submit" name="sendParam" value="Envoi des paramètres" />
  </a>

  <a class="btn btn-secondary col-lg-2" href="http://phpparamurl/Exo2/index.php">
    <input type="submit" name="retourfirstpage" value="Retour Index" />
  </a>
</div>

  <p><?= getParamUrl() ?></p>




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