<?php
// require "controller/controlIndex.php";
$numErros = [
  1 => "Votre fichier n'a pas été Upload", "Votre fichier n'est pas une image",
  "Désolé, votre fichier doit faire moins de 3mo"
];
// var_dump(mime_content_type("C:/Users/jp196/Documents/#Formation La Manu Le Havre/#PHP/phpFiles/assets/img/image01.jpg") . "\n");
var_dump($_FILES);
$pathPictures = "C:/Users/jp196/Documents/#Formation La Manu Le Havre/#PHP/phpFiles/assets/img/";
//  5MB
$myMaxSizeImg = 5 * 1024 * 1024; 

?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="./assets/css/style.css" rel="stylesheet" />
  <title>Module d'enregistrement d'images</title>
</head>
<style>

</style>

<body>
  <div class="container-fluid border">
    <div class="row border">
      <p class="myP">Module d'enregistrement d'images</p>
      <div>
        <!-- Le type d'encodage des données, enctype, DOIT être spécifié comme ce qui suit -->
        <form enctype="multipart/form-data" action="" method="post" class="">
          Veuillez choisir votre image : 
          <img id="imgPreview">
          <input name="fileToUpload" id="fileToUpload" type="file" />
          <input type="submit" value="Upload" " />
        </form>
      </div>
    </div>
  </div>
<!-- <if(!preg_match('/\.(jpg|gif|png)$/',$_FILES['fichier']['name'])) unset($_FILES['fichier']) ; -->
<script type="text/javascript" src="./assets/js/uploadPreview.js"></script>
</body>

</html>