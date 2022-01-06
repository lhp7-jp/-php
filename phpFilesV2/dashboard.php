<?php
// dashboard.php
require "./controller/controlDashboard.php";

$msgErrors = [
  'notupload' => "Votre fichier n'a pas été uploadé. ", 'type' => "Votre fichier n'est pas une image. (mime) ",
  'type1' => "Votre fichier n'est pas une image. (ext) ", 'size' => "Désolé, votre fichier doit faire moins de 5mo. ",
  'Existe' => "Désolé, le fichier existe déjà."
];
$nberror = 0;

// taille max du fichier à uploader
$myMaxSizeImg = $_COOKIE['myQuota'] * 1024 * 1024;
// extension autorisée
$validExtImg = array('jpg', 'png', 'webp');
$fullValidExtImg = array('image/jpg', 'image/png', 'image/webp');
// chemin ou se trouve les fichiers à télécharger
$pathImg = "C:/Users/jp196/Documents/#Formation La Manu Le Havre/#PHP/phpFilesV2/assets/img/".$_COOKIE['myLogin']."/";
if (!(empty($_FILES))) {
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
     
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./assets/css/style.css" rel="stylesheet" />
    <title>Dashboard</title>
</head>

<body>
    <h1>allPIX</h1>
    <h2>Bonjour, <?= $_COOKIE['myLogin']; ?></h2>
    <h1></h1>
    <h2>Quota : <?= $_COOKIE['myQuota']; ?> MO</h2>
    <h1></h1>
    <h2>Formule : <?= $_COOKIE['myFormule']; ?></h2>
    <h1></h1>
    <!-- Le type d'encodage des données, enctype, DOIT être spécifié comme ce qui suit -->
    <form enctype="multipart/form-data" action="" method="post" class="">
      <img id="imgPreview">
      <input name="fileToUpload" id="fileToUpload" type="file" />
      <h1></h1>
      <input type="submit" value="Upload" name="submitButton" />
    </form>
    <h1></h1>
    <button onclick="window.location.href='./gallery.php';">Gallery</button>
    <h1></h1>
    <button onclick="window.location.href='./dashboard.php';">retour</button>
    <h1></h1>
    <button onclick="window.location.href='./deconnexion.php';">Deconnexion</button>
    <h1></h1>
</body>

</html>