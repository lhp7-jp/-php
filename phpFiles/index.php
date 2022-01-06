<?php
//var_dump($_FILES);
$msgErrors = [
  'notupload' => "Votre fichier n'a pas été uploadé. ", 'type' => "Votre fichier n'est pas une image. (mime) ",
  'type1' => "Votre fichier n'est pas une image. (ext) ", 'size' => "Désolé, votre fichier doit faire moins de 5mo. ",
  'Existe' => "Désolé, le fichier existe déjà."
];
$nberror = 0;

// taille max du fichier à uploader
$myMaxSizeImg = 5 * 1024 * 1024;
// extension autorisée
$validExtImg = array('jpg', 'png', 'webp');
$fullValidExtImg = array('image/jpg', 'image/png', 'image/webp');
// chemin ou se trouve les fichiers à télécharger
$pathImg = "C:/Users/jp196/Documents/#Formation La Manu Le Havre/#PHP/phpFiles/assets/img/";

if (!empty($_POST['submitButton']) && $_FILES['fileToUpload']['error'] == 0) {

  // Vérifie la format du fichier à télécharger par mime
  if (!(in_array(mime_content_type($_FILES['fileToUpload']['tmp_name']), $fullValidExtImg))) {
    echo $msgErrors['type'];
    $nberror++;

  // Vérifie l'extension du fichier à télécharger
  } elseif (!(in_array(strtolower(pathinfo($_FILES['fileToUpload']['name'], PATHINFO_EXTENSION)), $validExtImg))) {
    echo $msgErrors['type1'];
    $nberror++;

  // Vérifie la taille du fichier à télécharger
  } elseif ($_FILES['fileToUpload']['size'] > $myMaxSizeImg) {
    echo $msgErrors['size'];
    $nberror++;
  } else {
    $extension = mime_content_type($_FILES['fileToUpload']['name'])[1];
    $newNameImg = $pathImg . uniqid().$extension;
    move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],$newNameImg);
    echo "Le fichier " .uniqid().$extension . " a été uploadé.";
  }
}
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
          <input type="submit" value="Upload" name="submitButton" />
        </form>
      </div>
    </div>
  </div>
  <script type="text/javascript" src="./assets/js/uploadPreview.js"></script>
</body>

</html>