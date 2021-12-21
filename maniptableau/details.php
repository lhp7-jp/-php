<?php
require "controller/controlDetails.php";
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./assets/css/style.css" rel="stylesheet" />
    <title>Détail :</title>
</head>

<body>
    <p>Détails :</p>
    <div>
    <!-- <img src="./assets/img/<?= $picture ?>" title="<?= $infos['name'] ?>" alt="bloc note" /> -->
    <!-- <img src="./assets/img/<?= $infos['picture'] ?>" title="<?= $infos['name'] ?>" alt="bloc note" /> -->
    </div>
    <p><?= $name ?></p>
    <p><?="Du  ".$dateDeb." au ".$dateFin ?></p>
    <!-- <p><?= $place ?></p> -->
    <p><?="Prix : ".$price ?></p>
    <p><?= $summary ?></p>


</body>
</html>